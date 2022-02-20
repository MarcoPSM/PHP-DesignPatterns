<?php
namespace AbstractFactory\PraticalExample;

include_once "Page.php";
include_once "PHPTemplateFactory.php";
include_once "TwigTemplateFactory.php";

/**
 * Now, in other parts of the app, the client code can accept factory objects of any type.
 */
$page = new Page('Sample page', 'This is the body.');

echo "Testing actual rendering with the PHPTemplate factory:\n";
echo $page->render(new PHPTemplateFactory());


// Uncomment the following if you have Twig installed.

// echo "Testing rendering with the Twig factory:\n"; echo $page->render(new
// TwigTemplateFactory());