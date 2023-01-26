<?php
namespace ITBMedia\FortnoxBundle\Service;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;

class FortnoxService{

    private ParameterBagInterface $parameterBag;
    /**
     */
    public function __construct(ParameterBagInterface $parameterBag) {
        $this->parameterBag = $parameterBag;
    }

    public function initializeAuth(string $type = "code", array $scopes = [], array $state = []) : RedirectResponse
    {
        
        return new RedirectResponse("https://apps.fortnox.se/oauth-v1/auth?" . http_build_query(
                array(
                    'client_id' => $this->parameterBag->get('fortnox_bundle.client_id'),
                    'redirect_uri' => $this->parameterBag->get('fortnox_bundle.redirect_url'),
                    'response_type' => $type,
                    'scope' => implode($scopes, ' '),
                    'state' => $state,
                )
            )
        );
    }

    public function getToken(string $code) : array
    {
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
                'code' => $code,
                'redirect_uri' => $this->parameterBag->get('fortnox_bundle.redirect_url'),
            )
        ));
        $res = json_decode(curl_exec($ch), true);
        $statusCode = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if($statusCode === 200)
        {
            return $res;
        }
    }
}