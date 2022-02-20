<?php
include_once "Dialog.php";
include_once "WindowsButton.php";

class WindowsDialog extends Dialog
{

    function createButton(): Button
    {
        return new WindowsButton();
    }
}