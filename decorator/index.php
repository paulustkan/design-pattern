<?php

interface Decorator
{
    public function operation(): string;
}

class Item implements Decorator
{
    public function operation(): string
    {
        return "Item";
    }
}

class Wrapper implements Decorator
{
    protected $decorator;

    function __construct(Decorator $decorator)
    {
        $this->decorator = $decorator;
    }

    public function operation(): string
    {
        return $this->decorator->operation();
    }
}

class WrapperA extends Wrapper
{
    public function operation(): string
    {
        return "WrapperA(" . parent::operation() . ")";
    }
}

class WrapperB extends Wrapper
{
    public function operation(): string
    {
        return "WrapperB(" . parent::operation() . ")";
    }
}

$item = new Item();
$wrapperA = new WrapperA($item);
$wrapperB = new WrapperB($wrapperA);

echo($wrapperA->operation());
echo '<br />';
echo($wrapperB->operation());
