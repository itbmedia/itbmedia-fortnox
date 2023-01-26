<?php
namespace ITBMedia\FortnoxBundle\Controller;

use ITBMedia\FortnoxBundle\Event\AuthorizationSuccessEvent;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CallbackController extends Controller
{
    private ParameterBagInterface $parameterBag;
    private EventDispatcherInterface $eventDispatcher;

    public function __construct(ParameterBagInterface $parameterBag, EventDispatcherInterface $eventDispatcher)
    {
        $this->parameterBag = $parameterBag;
        $this->eventDispatcher = $eventDispatcher;
    }

    public function fortnoxCallback(Request $request)
    {
        if (isset($request->query->all()['error'])) {
            
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
                'redirect_uri' => $this->parameterBag->get('fortnox_bundle.redirect_url'),
            )
        ));
        $res = json_decode(curl_exec($ch), true);
        $statusCode = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        if($statusCode === 200){
            $this->eventDispatcher->dispatch(AuthorizationSuccessEvent::NAME, new AuthorizationSuccessEvent());
        }
        return $this->redirect($this->parameterBag->get('fortnox_bundle.success_redirect_url').'?'.http_build_query(
            array(
                'success' => true,
            )
        ));
    }
}