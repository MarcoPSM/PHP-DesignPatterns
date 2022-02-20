<?php
include_once "Dialog.php";
include_once "HTMLButton.php";

class WebDialog extends Dialog
{

    function createButton(): Button
    {
        return new HTMLButton();
    }
}