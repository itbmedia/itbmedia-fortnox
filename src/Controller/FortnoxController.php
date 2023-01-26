<?php
namespace ITBMedia\FortnoxBundle\Controller;

use ITBMedia\FortnoxBundle\Event\AuthorizationSuccessEvent;
use ITBMedia\FortnoxBundle\Exception\FortnoxException;
use ITBMedia\FortnoxBundle\Modal\Token;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGenerator;

class FortnoxController extends Controller
{
    private ParameterBagInterface $parameterBag;
    private EventDispatcherInterface $eventDispatcher;

    public function __construct(ParameterBagInterface $parameterBag, EventDispatcherInterface $eventDispatcher)
    {
        $this->parameterBag = $parameterBag;
        $this->eventDispatcher = $eventDispatcher;
    }

    public function fortnoxConnect(Request $request)
    {
        return new RedirectResponse("https://apps.fortnox.se/oauth-v1/auth?" . http_build_query(
            array(
                'client_id' => $this->parameterBag->get('fortnox_bundle.client_id'),
                'redirect_uri' => $this->generateUrl('itbmedia_fortnox_callback', [], UrlGenerator::ABSOLUTE_URL),
                'response_type' => $this->parameterBag->get('fortnox_bundle.type'),
                'scope' => implode($this->parameterBag->get('fortnox_bundle.scopes'), ' '),
                'state' => $request->query->get('state'),
            )
        )
        );
    }

    public function fortnoxCallback(Request $request)
    {
        if ($request->query->get('error') && $request->query->get('error_description')) {
            throw new FortnoxException(500, 0, $request->query->get('error_description'));
        }

        $auth = base64_encode($this->parameterBag->get('fortnox_bundle.client_id').':'.$this->parameterBag->get('fortnox_bundle.client_secret'));
        $ch = curl_init("https://apps.fortnox.se/oauth-v1/token");

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-type: application/x-www-form-urlencoded',
            'Authorization: Basic '.$auth
        ));
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(
            array(
                'grant_type' => 'authorization_code',
                'code' => $request->query->get('code'),
                'redirect_uri' => $this->generateUrl('itbmedia_fortnox_callback', [], UrlGenerator::ABSOLUTE_URL),
            )
        ));
        $response = curl_exec($ch);
        $statusCode = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if($statusCode !== 200){
            throw new FortnoxException($statusCode, 0, json_decode($response, true)['error_description'] ?: "Unknown error");
        }

        $this->eventDispatcher->dispatch(
            AuthorizationSuccessEvent::NAME, 
            new AuthorizationSuccessEvent(Token::deserialize($response), $request->query->get('state'))
        );

        return $this->redirect($this->parameterBag->get('fortnox_bundle.success_redirect_url').'?'.http_build_query(
            array(
                'success' => true,
            )
        ));
    }
}