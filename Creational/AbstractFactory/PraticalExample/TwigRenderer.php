<?php

namespace AbstractFactory\PraticalExample;

include_once "TemplateRenderer.php";

/**
 * The renderer for Twig templates.
 */
class TwigRenderer implements TemplateRenderer
{

    public function render(string $templateString, array $arguments = []): string
    {
        return \Twig::render($templateString, $arguments);
    }
}