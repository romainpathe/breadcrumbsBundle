<?php

namespace Ridersoft\BreadcrumbsBundle\Twig\Components;

use AllowDynamicProperties;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent]
final class Breadcrumbs
{
    public array $items;
}
