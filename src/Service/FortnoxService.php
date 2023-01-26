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

    public function initializeAuth(string $callback, string $type = "code", array $scopes = [], array $state = []) : RedirectResponse
    {
        return new RedirectResponse("https://apps.fortnox.se/oauth-v1/auth?" . http_build_query(
                array(
                    'client_id' => $this->parameterBag->get('fortnox_bundle.client_id'),
                    'redirect_uri' => $callback,
                    'response_type' => $type,
                    'scope' => implode($scopes, ' '),
                    'state' => $state,
                )
            )
        );
    }
}