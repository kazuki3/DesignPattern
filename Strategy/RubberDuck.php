<?php

require_once 'Duck.php';
require_once 'FlyPerform/FlyNoWay.php';
require_once 'QuackPerform/Squeak.php';

class RubberDuck extends Duck
{
    public function __construct()
    {
        $this->flyBehavior = new FlyNoWays;
        $this->quackBehavior = new Squeak;
    }

    public function display()
    {
        echo 'ゴム製の鴨です。', PHP_EOL;
    }
}