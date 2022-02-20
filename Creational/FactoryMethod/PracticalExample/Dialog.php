<?php

abstract class Dialog
{
    abstract function createButton(): Button;

    public function render() {
        $okButton = $this->createButton();

        $okButton->onClick("closeDialog");
        $okButton->render();
    }
}