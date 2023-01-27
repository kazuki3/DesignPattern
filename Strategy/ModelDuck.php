<?php

require_once 'Duck.php';

class ModelDuck extends Duck
{
    public function __construct()
    {
        $this->flyBehavior = new FlyNoWays;
        $this->quackBehavior = new Quack;
    }

    public function display()
    {
        echo '模型の鴨です。', PHP_EOL;
    }
}