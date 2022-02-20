<?php

namespace AbstractFactory\PraticalExample;

include_once "TemplateFactory.php";
include_once "TwigTitleTemplate.php";
include_once "TwigPageTemplate.php";
include_once "TwigRenderer.php";
/**
 * Each Concrete Factory corresponds to a specific variant (or family) of products.
 *
 * This Concrete Factory creates Twig templates.
 */
class TwigTemplateFactory implements TemplateFactory
{

    public function createTitleTemplate(): TitleTemplate
    {
        return new TwigTitleTemplate();
    }

    public function createPageTemplate(): PageTemplate
    {
        return new TwigPageTemplate($this->createTitleTemplate());
    }

    public function getRenderer(): TemplateRenderer
    {
        return new TwigRenderer();
    }
}