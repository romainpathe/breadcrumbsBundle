<?php

namespace Ridersoft\BreadcrumbsBundle;

use Ridersoft\BreadcrumbsBundle\DependencyInjection\BreadcrumbsPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class BreadcrumbsBundle extends Bundle
{

    public function build(ContainerBuilder $container): void
    {
        parent::build($container);

        $container->addCompilerPass(new BreadcrumbsPass());
    }

    public function getPath(): string
    {
        return \dirname(__DIR__);
    }

}