<?php

namespace RomainPathe\BreadcrumbsBundle\Twig\Components;

use AllowDynamicProperties;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent]
final class Breadcrumbs
{
    public array $items;


    public function getItems(): array
    {
        return $this->items;
    }
}
