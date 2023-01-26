<?php
namespace ITBMedia\FortnoxBundle\Service;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class FortnoxService{

    private ParameterBagInterface $parameterBag;
    /**
     */
    public function __construct(ParameterBagInterface $parameterBag) {
        $this->parameterBag = $parameterBag;
    }
}