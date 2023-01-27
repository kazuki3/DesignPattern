<?php

require_once 'Duck.php';
require_once 'FlyPerform/FlyWithWings.php';
require_once 'QuackPerform/Quack.php';

class MallardDuck extends Duck
{
    public function __construct()
    {
        $this->flyBehavior = new FlyWithWings;
        $this->quackBehavior = new Quack;
    }

    public function display()
    {
        echo '本物のカモです。', PHP_EOL;
    }
}