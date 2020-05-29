<?php

abstract class Composite
{
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function add(Composite $box): void {}

    public function remove(Composite $box): void {}

    public function getName(): string
    {
        return $this->name;
    }

    abstract function getData(): string;
}

class Products extends Composite
{
    public function getData(): string
    {
        return "Here is: " . $this->getName();
    }
}

class Boxes extends Composite
{
    protected $children = [];

    public function add(Composite $box): void
    {
        $this->children[$box->getName()] = $box;
    }

    public function remove(Composite $box): void
    {
        if (array_key_exists($box->getName(), $this->children)) {
            unset($this->children[$box->getName()]);
        }
    }

    public function getData(): string
    {
        $arr = [];
        foreach ($this->children as $child) {
            $arr[] = $child->getData();
        }

        return $this->getName() . '(' . implode(' + ', $arr) . ')';
    }
}

$book = new Products('book');
$pen = new Products('pen');
$pencil = new Products('pencil');
$notebook = new Products('notebook');
$ruler = new Products('ruler');

$bill = new Boxes('bill');
$box1 = new Boxes('box1');
$box2 = new Boxes('box2');

$box1->add($book);
$box1->add($pen);
$box2->add($pencil);
$box2->add($notebook);

$bill->add($ruler);
$bill->add($box1);
$bill->add($box2);

$box2->remove($notebook);

var_dump($bill->getData());





