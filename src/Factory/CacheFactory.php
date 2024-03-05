<?php

namespace ITBMedia\FortnoxBundle\Factory;

use Symfony\Component\Cache\Adapter\PdoAdapter;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Psr\Cache\CacheItemPoolInterface;

class CacheFactory
{
  private $parameterBag;

  public function __construct(ParameterBagInterface $parameterBag)
  {
    $this->parameterBag = $parameterBag;
  }

  public function createCacheAdapter(): CacheItemPoolInterface
  {
    $cacheConfig = $this->parameterBag->get('fortnox_bundle.cache', []);

    if (isset($cacheConfig['mysql'])) {
      // Create a PDO cache adapter for MySQL
      return new PdoAdapter(
        // PDO connection string
        $cacheConfig['mysql']
      );
    }

    throw new \InvalidArgumentException('No valid cache store configuration found.');
  }
}
