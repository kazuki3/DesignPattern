<?php

require_once 'MallardDuck.php';
require_once 'RubberDuck.php';

class MiniDuckSimulator
{
    public static function do(string $str)
    {
        if ($str === 'mallard') {
            self::mallardDuck();
        } elseif ($str === 'rubber') {
            self::rubberDuck();
        } else {
            echo '該当する鴨はいません。', PHP_EOL;
        }
    }

    static function mallardDuck()
    {
        $mallard_duck = new MallardDuck;
        $mallard_duck->performFly();
        $mallard_duck->performQuack();
        $mallard_duck->swim();
        $mallard_duck->display();
    }

    static function rubberDuck()
    {
        $mallard_duck = new RubberDuck;
        $mallard_duck->performFly();
        $mallard_duck->performQuack();
        $mallard_duck->swim();
        $mallard_duck->display();
    }
}

$simulator = new MiniDuckSimulator();
$simulator->do('rubber');