<?php

class Target
{
    public function request(): string
    {
        return "Target: The default target's behavior.";
    }
}

class Useful
{
    public function specialRequest(): string
    {
        return "Here is functionality that app really needs!";
    }
}

class Adapter extends Target
{
    private $adapter;

    public function __construct(Useful $useful)
    {
        $this->adapter = $useful;
    }

    public function request(): string
    {
        return parent::request() . ' ==> ' . $this->adapter->specialRequest();
    }
}

echo (new Target)->request();
echo '<br />';

echo (new Useful)->specialRequest();
echo '<br />';

echo (new Adapter(new Useful))->request();
echo '<br />';
