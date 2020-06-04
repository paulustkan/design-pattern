<?php

class Subject implements SplSubject
{
    private $observer;
    public $state;

    public function __construct()
    {
        $this->observer = new SplObjectStorage();
    }

    public function attach(SplObserver $observer): void
    {
        echo "attach observer <br />";
        $this->observer->attach($observer);
    }

    public function detach(SplObserver $observer): void
    {
        $this->observer->detach($observer);
        echo "detach observer <br />";
    }

    public function notify(): void
    {
        foreach ($this->observer as $observer) {
            $observer->update($this);
        }
    }

    public function someBusinessLogic()
    {
        $this->state = rand(0, 10);
        $this->notify();
        echo "Run " . __METHOD__ . " <br />";
    }

}

class ConcreteObserverA implements SplObserver
{
    public function update(SplSubject $subject): void
    {
        if ($subject->state < 3) {
            echo __METHOD__ . "<br />";
        }
    }
}

class ConcreteObserverB implements SplObserver
{
    public function update(SplSubject $subject): void
    {
        if ($subject->state == 0 || $subject->state >= 2) {
            echo __METHOD__ . "<br />";
        }
    }
}

$subject = new Subject();
$observerA = new ConcreteObserverA();
$observerB = new ConcreteObserverB();

$subject->attach($observerA);
$subject->attach($observerB);
$subject->someBusinessLogic();

echo '<br/><br/>';

$subject->detach($observerB);
$subject->someBusinessLogic();
