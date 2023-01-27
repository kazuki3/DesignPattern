<?php

require_once 'MallardDuck.php';
require_once 'RubberDuck.php';
require_once 'ModelDuck.php';
require_once 'FlyPerform/FlyRocketPowerd.php';

class MiniDuckSimulator
{
    public static function do(string $str)
    {
        if ($str === 'mallard') {
            self::mallardDuck();
        } elseif ($str === 'rubber') {
            self::rubberDuck();
        } elseif ($str === 'model') {
            self::modelDuck();
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

    static function modelDuck()
    {
        $model_duck = new ModelDuck;
        $model_duck->performFly();
        $model_duck->setFlyBehavior(new FlyRocketPowered());
        $model_duck->performFly();
        $model_duck->performQuack();
        $model_duck->swim();
        $model_duck->display();
    }
}

$simulator = new MiniDuckSimulator();
$simulator->do('rubber');
echo PHP_EOL;

$simulator->do('model');
echo PHP_EOL;

$simulator->do('mallard');
echo PHP_EOL;

$simulator->do('mini');