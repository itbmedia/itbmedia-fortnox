<?php

namespace ITBMedia\FortnoxBundle\Controller;

use ITBMedia\FortnoxBundle\Interface\FortnoxAuthHandlerInterface;
use ITBMedia\FortnoxBundle\Model\Token;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class FortnoxController extends AbstractController
{
    /** @var ParameterBagInterface */
    private $params;

    /** @var FortnoxAuthHandlerInterface */
    private $handler;

    public function __construct(ParameterBagInterface $parameterBag, FortnoxAuthHandlerInterface $handler)
    {
        $this->params  = $parameterBag;
        $this->handler = $handler;
    }

    /**
     * Starts the Fortnox OAuth flow.
     */
    public function fortnoxConnect(Request $request): Response
    {
        $scopes = $request->query->get('scopes');
        if (!$scopes) {
            return new JsonResponse(['message' => 'Missing scopes'], 400);
        }

        // Optional: pass through extra state, but strip internals you don’t want round-tripped
        $state = $request->query->all();
        unset($state['scopes'], $state['code'], $state['error'], $state['error_description']);

        $authUrl = 'https://apps.fortnox.se/oauth-v1/auth?' . http_build_query([
            'client_id'     => $this->params->get('fortnox_bundle.client_id'),
            'redirect_uri'  => $this->getCallbackUrl($request),
            'response_type' => $this->params->get('fortnox_bundle.type'),
            'scope'         => $scopes,
            'state'         => $state,
            'access_type'   => 'offline',
        ]);

        return new RedirectResponse($authUrl);
    }

    /**
     * OAuth callback from Fortnox: NEVER redirects here; always delegates to the handler.
     */
    public function fortnoxCallback(Request $request): Response
    {
        $state = $request->query->get('state');
        if (!is_array($state)) {
            return $this->handler->onFailure([
                'message'   => 'Missing state',
                'code'      => 400,
                'error_key' => 'MissingState',
            ], []);
        }

        // Provider-reported error
        if ($request->query->get('error') && $request->query->get('error_description')) {
            $providerError = (string) $request->query->get('error');
            $providerDesc  = (string) $request->query->get('error_description');

            return $this->handler->onFailure([
                'message'                     => $providerDesc ?: 'Authorization failed',
                'code'                        => 502,
                'error_key'                   => 'ProviderAuthError',
                'provider_error'              => $providerError,
                'provider_error_description'  => $providerDesc,
                'http_status'                 => null,
            ], $state);
        }

        $code = (string) $request->query->get('code', '');
        if ($code === '') {
            return $this->handler->onFailure([
                'message'   => 'Missing authorization code',
                'code'      => 400,
                'error_key' => 'MissingCode',
            ], $state);
        }

        // Exchange code → token (cURL kept for 7.4 compatibility)
        $auth = base64_encode(
            $this->params->get('fortnox_bundle.client_id') . ':' .
                $this->params->get('fortnox_bundle.client_secret')
        );

        $ch = curl_init('https://apps.fortnox.se/oauth-v1/token');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/x-www-form-urlencoded',
            'Authorization: Basic ' . $auth,
        ]);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
            'grant_type'   => 'authorization_code',
            'code'         => $code,
            'redirect_uri' => $this->getCallbackUrl($request),
        ]));

        $body       = curl_exec($ch);
        $statusCode = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $curlErrNo  = curl_errno($ch);
        $curlErrMsg = curl_error($ch);
        curl_close($ch);

        if ($body === false || $curlErrNo !== 0) {
            return $this->handler->onFailure([
                'message'    => $curlErrMsg ?: 'Network error',
                'code'       => 502,
                'error_key'  => 'TransportError',
                'curl_errno' => $curlErrNo,
                'curl_error' => $curlErrMsg,
                'http_status' => null,
            ], $state);
        }

        $decoded = json_decode($body, true);

        if ($statusCode !== 200 || !is_array($decoded)) {
            $providerError = is_array($decoded) && isset($decoded['error']) ? (string) $decoded['error'] : null;
            $providerDesc  = is_array($decoded) && isset($decoded['error_description']) ? (string) $decoded['error_description'] : null;

            return $this->handler->onFailure([
                'message'                     => $providerDesc ?: 'Token exchange failed',
                'code'                        => ($statusCode >= 400 && $statusCode <= 599) ? $statusCode : 502,
                'error_key'                   => 'TokenExchangeError',
                'http_status'                 => $statusCode ?: null,
                'provider_error'              => $providerError,
                'provider_error_description'  => $providerDesc,
                'raw'                         => is_array($decoded) ? $decoded : $body,
            ], $state);
        }

        // Success → pass the token to Kund24 via handler
        $token = Token::deserialize($body);
        return $this->handler->onSuccess($token, $state);
    }

    public function fortnoxDisconnect(Request $request): Response
    {
        return new Response('Success', 200);
    }

    private function getCallbackUrl(Request $request): string
    {
        return $this->getRootDomainRedirect($request, 'itbmedia_fortnox_callback');
    }

    public function getRootDomainRedirect(Request $request, string $routeName): string
    {
        $host = $request->getHost(); // e.g. "itbmedia.sellfinity.com"
        $parts = explode('.', $host);

        // keep only last 2 parts ("sellfinity.com")
        $rootDomain = implode('.', array_slice($parts, -2));

        // generate absolute URL (with whatever host Symfony thinks is correct)
        $url = $this->generateUrl($routeName, [], UrlGeneratorInterface::ABSOLUTE_URL);

        // replace the host with the root domain
        return preg_replace('#://[^/]+#', '://' . $rootDomain, $url);
    }
}
