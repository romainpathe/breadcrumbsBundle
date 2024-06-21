<?php

namespace RomainPathe\BreadcrumbsBundle;

use AllowDynamicProperties;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent]
final class Breadcrumbs
{
    private array $items;

    public function getItems(): array
    {
        return $this->items;
    }


    public function addItem(string $label, ?string $url = null, bool $isCurrent = false): void
    {
        $this->items[] = [
            'label' => $label,
            'url' => $url,
            'isCurrent' => $isCurrent
        ];
    }

    public function removeItem(int $index): void
    {
        unset($this->items[$index]);
    }


}
