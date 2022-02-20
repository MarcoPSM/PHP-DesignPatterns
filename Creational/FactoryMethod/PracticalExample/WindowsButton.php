<?php
include_once "Button.php";

class WindowsButton implements Button
{

    public function render()
    {
        echo "Button Windows" . PHP_EOL;
    }

    public function onClick(string $a)
    {
        echo "Bind a native Windows click event." . PHP_EOL;
    }
}