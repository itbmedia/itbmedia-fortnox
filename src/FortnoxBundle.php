<?php

namespace ITBMedia\FortnoxBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use ITBMedia\FortnoxBundle\DependencyInjection\Compiler\EnsureHandlerConfiguredPass;

class FortnoxBundle extends Bundle
{
  public function build(ContainerBuilder $container): void
  {
    parent::build($container);
    $container->addCompilerPass(new EnsureHandlerConfiguredPass());
  }
}
