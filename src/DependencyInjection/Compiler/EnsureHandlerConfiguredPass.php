<?php
// src/DependencyInjection/Compiler/EnsureHandlerConfiguredPass.php
namespace ITBMedia\FortnoxBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

final class EnsureHandlerConfiguredPass implements CompilerPassInterface
{
  public function process(ContainerBuilder $container): void
  {
    $id = \ITBMedia\FortnoxBundle\Interface\FortnoxAuthHandlerInterface::class;
    // // If nothing implements the interface and there’s no alias for it, fail hard.
    if (!$container->has($id)) {
      throw new \LogicException(
        sprintf(
          '%s must be bound in the host app. Define an implementation and alias it, e.g.:' . PHP_EOL .
            'services:' . PHP_EOL .
            '  App\\FortnoxContactBundle\\FortnoxAuthHandler: ~' . PHP_EOL .
            '  %1$s: { alias: App\\FortnoxContactBundle\\FortnoxAuthHandler }',
          $id
        )
      );
    }
  }
}
