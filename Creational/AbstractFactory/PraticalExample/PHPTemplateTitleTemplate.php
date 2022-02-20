<?php

namespace AbstractFactory\PraticalExample;

include_once "TitleTemplate.php";
/**
 * This Concrete Product provides PHPTemplate page title templates.
 */
class PHPTemplateTitleTemplate implements TitleTemplate
{

    public function getTemplateString(): string
    {
        return "<h1><?= \$title; ?></h1>";
    }
}