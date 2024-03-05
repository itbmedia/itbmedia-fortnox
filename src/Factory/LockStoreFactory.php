<?php

namespace ITBMedia\FortnoxBundle\Factory;

use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\Lock\Store\DoctrineDbalStore;
use Symfony\Component\Lock\Store\RedisStore;

class LockStoreFactory
{
  private $parameterBag;

  public function __construct(ParameterBagInterface $parameterBag)
  {
    $this->parameterBag = $parameterBag;
  }

  public function createStore()
  {

    $lockConfig = $this->parameterBag->get('fortnox_bundle.lock', []);

    if (isset($lockConfig['mysql'])) {
      return new DoctrineDbalStore($lockConfig['mysql']);
    }

    if (isset($lockConfig['redis'])) {
      return new RedisStore($lockConfig['redis']);
    }

    throw new \InvalidArgumentException('No valid lock store configuration found.');
  }
}
