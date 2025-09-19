<?php

namespace ITBMedia\FortnoxBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\Config\FileLocator;

class FortnoxExtension extends Extension
{

	/**
	 * Loads a specific configuration.
	 *
	 * @param array $configs
	 * @param ContainerBuilder $container
	 * @return mixed
	 */
	public function load(array $configs, ContainerBuilder $container)
	{
		$loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
		$loader->load('services.yaml');

		$configuration = new Configuration();
		$config = $this->processConfiguration($configuration, $configs);
		foreach ($config as $key => $value) {
			$container->setParameter('fortnox_bundle.' . $key, $value);
		}
	}

	public function getAlias(): string
	{
		return 'fortnox';
	}
}
