<?php

namespace RomainPathe\BreadcrumbsBundle\Twig\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent]
final class Breadcrumb
{
    public string $label;
    public ?string $url = null;
    public bool $isCurrent = false;
}
