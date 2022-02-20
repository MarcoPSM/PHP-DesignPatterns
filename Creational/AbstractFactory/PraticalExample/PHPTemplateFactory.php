<?php

namespace AbstractFactory\PraticalExample;

include_once "TemplateFactory.php";
include_once "PHPTemplateTitleTemplate.php";
include_once "PHPTemplatePageTemplate.php";
include_once "PHPTemplateRenderer.php";

/**
 * Each Concrete Factory corresponds to a specific variant (or family) of products.
 *
 * This Concrete Factory creates PHPTemplate templates.
 */
class PHPTemplateFactory implements TemplateFactory
{

    public function createTitleTemplate(): TitleTemplate
    {
        return new PHPTemplateTitleTemplate();
    }

    public function createPageTemplate(): PageTemplate
    {
        return new PHPTemplatePageTemplate($this->createTitleTemplate());
    }

    public function getRenderer(): TemplateRenderer
    {
        return new PHPTemplateRenderer();
    }
}