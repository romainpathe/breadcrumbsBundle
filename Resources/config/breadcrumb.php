<?php

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $container): void {

    $container->services()
        ->set('breadcrumbs', RomainPathe\BreadcrumbsBundle\Breadcrumbs::class)
        ->public()
        ->autowire()
        ->autoconfigure();
};