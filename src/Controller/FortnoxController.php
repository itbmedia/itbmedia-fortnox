<?php
namespace ITBMedia\FortnoxBundle\Controller;

use ITBMedia\FortnoxBundle\Event\ConnectEvent;
use ITBMedia\FortnoxBundle\Event\DisconnectEvent;
use ITBMedia\FortnoxBundle\Exception\FortnoxException;
use ITBMedia\FortnoxBundle\Model\Token;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\File\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Generator\UrlGenerator;

class FortnoxController extends AbstractController
{
    private ParameterBagInterface $parameterBag;
    private EventDispatcherInterface $eventDispatcher;
    private SessionInterface $session;

    public function __construct(ParameterBagInterface $parameterBag, EventDispatcherInterface $eventDispatcher, SessionInterface $session)
    {
        $this->parameterBag = $parameterBag;
        $this->eventDispatcher = $eventDispatcher;
        $this->session = $session;
    }

    public function fortnoxConnect(Request $request)
    {
            if(empty($this->session->get('fortnox_csrf_token'))){
                $csrfToken = bin2hex(random_bytes(32));
                $this->session->set('fortnox_csrf_token', $csrfToken);
            }else{
                $csrfToken = $this->session->get('fortnox_csrf_token');
            }
            return new RedirectResponse("https://apps.fortnox.se/oauth-v1/auth?" . http_build_query(
                array(
                    'client_id' => $this->parameterBag->get('fortnox_bundle.client_id'),
                    'redirect_uri' => $this->generateUrl('itbmedia_fortnox_callback', [], UrlGenerator::ABSOLUTE_URL),
                    'response_type' => $this->parameterBag->get('fortnox_bundle.type'),
                    'scope' => implode($this->parameterBag->get('fortnox_bundle.scopes'), ' '),
                    'state' => array(
                        'fortnox_csrf_token' => $csrfToken
                    ),
                )
            )
            );
    }

    public function fortnoxCallback(Request $request)
    {
        if ($request->query->get('error') && $request->query->get('error_description')) {
            throw new FortnoxException(500, 0, $request->query->get('error_description'));
        }
        $state = $request->query->get('state');

        if(!isset($state['fortnox_csrf_token']) || empty($this->session->get('fortnox_csrf_token')))
        {
            throw new Exception("Missing csrf token");
        }

        if($state['fortnox_csrf_token'] !== $this->session->get('fortnox_csrf_token'))
        {
            throw new Exception("csrf token mismatch");
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
            ConnectEvent::NAME, 
            new ConnectEvent(Token::deserialize($response), $this->getUser())
        );

        return $this->redirect($this->parameterBag->get('fortnox_bundle.success_redirect_url').'?'.http_build_query(
            array(
                'success' => true
            )
        ));
    }

    public function fortnoxDisconnect(Request $request)
    {
        $user = $this->getUser();
        if (
            $user &&
            method_exists($user, 'getRoles') &&
            array_intersect($user->getRoles(), $this->parameterBag->get('fortnox_bundle.allowed_roles'))
        ) {
            $this->eventDispatcher->dispatch(
                DisconnectEvent::NAME, 
                new DisconnectEvent($user)
            );
            return new Response("Success", 200);
        }else{
            return new Response("Unauthorized", 403);
        }
    }
}