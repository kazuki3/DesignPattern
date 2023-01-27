<?php

require_once 'QuackBehavior.php';

class Squeak implements QuackBehavior
{
    public function quack()
    {
        echo 'キューキュー', PHP_EOL;
    }
}