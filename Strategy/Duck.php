<?php

require_once 'FlyPerform/FlyBehavior.php';
require_once 'QuackPerform/QuackBehavior.php';

abstract class Duck
{
    protected $flyBehavior;
    protected $quackBehavior;

    abstract function display();

    public function performFly()
    {
        $this->flyBehavior->fly();
    }

    public function performQuack()
    {
        $this->quackBehavior->quack();
    }

    public function swim()
    {
        echo '全ての鴨は浮かびます。おとりの鴨でも！', PHP_EOL;
    }

    public function setFlyBehavior(FlyBehavior $fb)
    {
        $this->flyBehavior = $fb;
    }

    public function setQuackBehavior(QuackBehavior $qb)
    {
        $this->quackBehavior = $qb;
    }
}