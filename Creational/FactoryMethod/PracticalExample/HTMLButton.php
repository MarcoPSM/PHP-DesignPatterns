<?php

include_once "Button.php";

class HTMLButton implements Button
{

    public function render()
    {
        echo "Button HTML" . PHP_EOL;
    }

    public function onClick(string $a)
    {
        echo "Bind a native HTML click event." . PHP_EOL;
    }
}