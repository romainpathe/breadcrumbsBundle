<?php

namespace Ridersoft\BreadcrumbsBundle\Twig\Components;

use AllowDynamicProperties;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent]
final class Breadcrumb
{
    public string $label;
    public ?string $url = null;
    public bool $isCurrent = false;
}
