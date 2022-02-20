<?php
include_once "Creator.php";
include_once "ConcreteProduct2.php";
class ConcreteCreator2 extends Creator
{

    /**
     * @inheritDoc
     */
    public function factoryMethod(): Product
    {
        return new ConcreteProduct2();
    }
}