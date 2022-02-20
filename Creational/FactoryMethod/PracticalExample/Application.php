<?php
include_once "WindowsDialog.php";
include_once "WebDialog.php";

function initialize() {
    $conf = ["OS"=>"web"];

    if ($conf["OS"] == "web") {
        $dialog = new WebDialog();
    }
    else if ($conf["OS"] == "Windows") {
        $dialog = new WindowsDialog();
    }
    else {
        throw new Exception("Error! Unknown OS");
    }
    return $dialog;
}

try {
    $dialog = initialize();
    $dialog->render();
} catch (Exception $e) {
    echo $e->getMessage();
}

