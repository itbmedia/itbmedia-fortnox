<?php

namespace ITBMedia\FortnoxBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{

    /**
     * Generates the configuration tree builder.
     * @return \Symfony\Component\Config\Definition\Builder\TreeBuilder
     */
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
            ->scalarNode('custom_redirect_url')->defaultValue('default')->end()
            ->scalarNode('client_id')->end()
            ->scalarNode('client_secret')->end()
            ->scalarNode('type')->end()
            ->scalarNode('use_redirects')->end()
            ->arrayNode('allowed_roles')
            ->scalarPrototype()->end()
            ->end()
            ->scalarNode('success_redirect_url')->end()
            ->arrayNode('lock')
            ->children()
            ->scalarNode('mysql')->end()
            ->end()
            ->end()
            ->arrayNode('cache') // Define arrayNode here
            ->children() // Define children of 'cache'
            ->scalarNode('mysql')->end()
            ->end()
            ->end()
            ->end();

        return $treeBuilder;
    }
}
