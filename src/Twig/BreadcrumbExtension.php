<?php

namespace RomainPathe\BreadcrumbsBundle\Twig;

use RomainPathe\BreadcrumbsBundle\Breadcrumbs;
use Twig\Environment;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class BreadcrumbExtension extends AbstractExtension
{

    private array $breadcrumbs;
    private Environment $templating;

    public function __construct(Breadcrumbs $breadcrumbs, Environment $templating)
    {
        $this->breadcrumbs = $breadcrumbs->getItems();
        $this->templating = $templating;
    }


    public function getFunctions(): array
    {
        return [
            new TwigFunction('breadcrumbs', [$this, 'getBreadcrumbs']),
            new TwigFunction('render_breadcrumbs', [$this, 'renderBreadcrumbs'], ['is_safe' => ['html']])
        ];
    }

    public function getBreadcrumbs(): array
    {
        return $this->breadcrumbs;
    }

    public function renderBreadcrumbs(): string
    {
        return $this->templating->render('@Breadcrumbs/breadcrumbs.html.twig', ['breadcrumbs' => $this->breadcrumbs]);
    }

}