<?php
namespace ITBMedia\FortnoxBundle\DependencyInjection;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface{
    
	/**
	 * Generates the configuration tree builder.
	 * @return \Symfony\Component\Config\Definition\Builder\TreeBuilder
	 */
	public function getConfigTreeBuilder() {
        $treeBuilder = new TreeBuilder('fortnox_bundle');

        if (method_exists($treeBuilder, 'getRootNode')) {
            $rootNode = $treeBuilder->getRootNode();
        } else {
            $rootNode = $treeBuilder->root('fortnox_bundle');
        }

        $rootNode
            ->children()
                ->scalarNode('client_id')->end()
                ->scalarNode('client_secret')->end()
                ->scalarNode('type')->end()
                ->arrayNode('scopes')
                    ->scalarPrototype()->end()
                ->end()
                ->arrayNode('allowed_roles')
                    ->scalarPrototype()->end()
                ->end()
                ->scalarNode('success_redirect_url')->end()
            ->end();

        return $treeBuilder;
	}
}