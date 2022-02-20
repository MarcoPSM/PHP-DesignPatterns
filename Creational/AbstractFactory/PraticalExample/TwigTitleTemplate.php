<?php

namespace AbstractFactory\PraticalExample;

include_once "TitleTemplate.php";

/**
 * This Concrete Product provides Twig page title templates.
 */
class TwigTitleTemplate implements TitleTemplate
{

    public function getTemplateString(): string
    {
        return "<h1>{{ title }}</h1>";
    }
}