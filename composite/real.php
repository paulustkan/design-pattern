<?php

abstract class Composite
{
    protected $name;

    function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    abstract function content(): string;
}

class Input extends Composite
{
    protected $title;
    protected $value;

    function __construct(string $title, string $value, string $name)
    {
        parent::__construct($name);
        $this->title = $title;
        $this->value = $value;
    }

    public function content(): string
    {
        return "<label for={$this->title}>{$this->title}</label> <input value={$this->value} name={$this->name}/><br />";
    }
}

class FormField extends Composite
{
    protected $children = [];

    public function add(Composite $composite): void
    {
        $this->children[$composite->getName()] = $composite;
    }

    public function remove(Composite $composite): void
    {
        if (array_key_exists($composite->getName(), $this->children)) {
            unset($this->children[$composite->getName()]);
        }
    }

    public function content(): string
    {
        $arr = [];
        foreach ($this->children as $child) {
            $arr[] = $child->content();
        }

        return implode("", $arr);
    }
}

class Form extends FormField
{
    protected $link;

    function __construct(string $link, string $name)
    {
        parent::__construct($name);
        $this->link = $link;
    }

    public function content(): string
    {
        return
            "<form action={$this->link} name={$this->name}>"
                . parent::content() .
            "</form>";
    }
}

class Field extends FormField
{
    public function content(): string
    {
        return
            "<fieldset><legend>{$this->getName()}</legend>"
                . parent::content() .
            "</fieldset>";
    }
}

$email = new Input('Email', 'test@mail.com', 'email');
$userName = new Input('User Name', 'test A', 'text');
$pass = new Input('Password', '1234567', 'password');

$field1 = new Field('field1');
$field1->add($email);
$field1->add($userName);
$field1->add($pass);
$field1->remove($pass);

$field2 = new Field('field2');
$field2->add($pass);

$form = new Form('/create', 'new-form');
$form->add($field1);
$form->add($field2);

echo($form->content());
