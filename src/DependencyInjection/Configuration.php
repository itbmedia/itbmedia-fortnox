<?php

namespace ITBMedia\FortnoxBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('fortnox_bundle');

        if (method_exists($treeBuilder, 'getRootNode')) {
            $rootNode = $treeBuilder->getRootNode();
        } else {
            $rootNode = $treeBuilder->root('fortnox_bundle');
        }

        $rootNode
            ->children()
            ->scalarNode('client_id')->isRequired()->end()
            ->scalarNode('client_secret')->isRequired()->end()
            ->scalarNode('type')->end()
            ->scalarNode('redirect_base')
            ->defaultValue('') // 👈 new config node with default
            ->end()
            ->arrayNode('allowed_roles')
            ->scalarPrototype()->end()
            ->end()
            ->arrayNode('lock')
            ->children()
            ->scalarNode('mysql')->end()
            ->end()
            ->end()
            ->arrayNode('cache')
            ->children()
            ->scalarNode('mysql')->end()
            ->end()
            ->end()
            ->end();

        return $treeBuilder;
    }
}
