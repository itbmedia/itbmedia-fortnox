<?php

namespace ITBMedia\FortnoxBundle\Controller;

use ITBMedia\FortnoxBundle\Event\ConnectEvent;
use ITBMedia\FortnoxBundle\Event\DisconnectEvent;
use ITBMedia\FortnoxBundle\Exception\FortnoxException;
use ITBMedia\FortnoxBundle\Model\Token;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Contracts\EventDispatcher\EventDispatcherInterface;
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
        if ($scopes = $request->query->get('scopes')) {
            $request->query->remove('scopes');
            $state = [];
            if (is_array($request->query->all())) {
                $state = $request->query->all();
            }
            // if (empty($this->session->get('fortnox_csrf_token'))) {
            //     $csrfToken = bin2hex(random_bytes(32));
            //     $this->session->set('fortnox_csrf_token', $csrfToken);
            // } else {
            //     $csrfToken = $this->session->get('fortnox_csrf_token');
            // }
            if ($this->parameterBag->get("fortnox_bundle.custom_redirect_url") !== 'default') {
                $state['internal_redirect_url'] = $this->getRedirectUrl();
            }
            // $state['fortnox_csrf_token'] = $csrfToken;
            $url = "https://apps.fortnox.se/oauth-v1/auth?" . http_build_query(
                array(
                    'client_id' => $this->parameterBag->get('fortnox_bundle.client_id'),
                    'redirect_uri' => $this->getRedirectUrl($this->parameterBag->get("fortnox_bundle.custom_redirect_url")),
                    'response_type' => $this->parameterBag->get('fortnox_bundle.type'),
                    'scope' => $scopes,
                    'state' => $state,
                    'access_type' => "offline",
                )
            );

            if ($this->parameterBag->get("fortnox_bundle.use_redirects")) {
                $response = new RedirectResponse($url);
            } else {
                $response = new JsonResponse(array('url' => $url));
            }

            // $response->headers->setCookie(new Cookie('fortnox_csrf_token', $csrfToken, time() + (30 * 60)));
            return $response;
        } else {
            return new JsonResponse(array('message' => "Missing scopes"), 400);
        }
    }

    public function fortnoxCallback(Request $request)
    {
        if ($request->query->get('error') && $request->query->get('error_description')) {
            throw new FortnoxException(500, 0, $request->query->get('error_description'));
        }
        if (is_array($request->query->get('state'))) {
            $state = $request->query->get('state');
            // if(!isset($state['fortnox_csrf_token']) || empty($this->session->get('fortnox_csrf_token')))
            // {
            //     throw new Exception("Missing csrf token");
            // }

            // if($state['fortnox_csrf_token'] !== $this->session->get('fortnox_csrf_token'))
            // {
            //     throw new Exception("csrf token mismatch");
            // }
            // unset($state['fortnox_csrf_token']);
            $auth = base64_encode($this->parameterBag->get('fortnox_bundle.client_id') . ':' . $this->parameterBag->get('fortnox_bundle.client_secret'));
            $ch = curl_init("https://apps.fortnox.se/oauth-v1/token");

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-type: application/x-www-form-urlencoded',
                'Authorization: Basic ' . $auth
            ));
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(
                array(
                    'grant_type' => 'authorization_code',
                    'code' => $request->query->get('code'),
                    'redirect_uri' => $this->getRedirectUrl($this->parameterBag->get("fortnox_bundle.custom_redirect_url")),
                )
            ));
            $response = curl_exec($ch);
            $statusCode = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);

            if ($statusCode !== 200) {
                if (isset($state['failure_callback'])) {
                    return $this->redirect($state['failure_callback'] . '?' . http_build_query(json_decode($response, true)));
                } else {
                    throw new FortnoxException($statusCode, 0, json_decode($response, true)['error_description'] ?: "Unknown error");
                }
            }
            $state = array_merge(
                $state,
                array(
                    'success' => true
                )
            );
            $this->eventDispatcher->dispatch(
                new ConnectEvent(Token::deserialize($response), $state),
                ConnectEvent::NAME
            );
            if (isset($state['success_callback'])) {
                $callback = $state['success_callback'];
                unset($state['success_callback']);
                return $this->redirect($callback . '?' . http_build_query($state));
            } else {
                return $this->redirect($this->parameterBag->get('fortnox_bundle.success_redirect_url') . '?' . http_build_query($state));
            }
        } else {
            return new JsonResponse(array("message" => "missing state"), 400);
        }
    }

    public function fortnoxDisconnect(Request $request)
    {
        $this->eventDispatcher->dispatch(
            new DisconnectEvent(),
            DisconnectEvent::NAME,
        );
        return new Response("Success", 200);
    }

    private function getRedirectUrl($customRedirectUrl = null)
    {
        // return "http://127.0.0.1:8000/api/fortnox/callback"; //! Remove
        if ($customRedirectUrl) {
            return $customRedirectUrl;
        } else {
            return $this->generateUrl('itbmedia_fortnox_callback', [], UrlGenerator::ABSOLUTE_URL);
        }
    }
}
