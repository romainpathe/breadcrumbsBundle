<?php

namespace RomainPathe\BreadcrumbsBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
use Symfony\Component\Config\FileLocator;

class BreadcrumbExtension extends Extension
{

    /**
     * @inheritDoc
     */
    public function load(array $configs, ContainerBuilder $container): void
    {

        $mainConfig = $this->getConfiguration($configs, $container);
        $config = $this->processConfiguration($mainConfig, $configs);

        $container->setParameter('breadcrumbs', $config);

        $loader = new PhpFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('breadcrumb.php');

    }
}