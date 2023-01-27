<?php

require_once 'FlyBehavior.php';

class FlyRocketPowered implements FlyBehavior
{
    public function fly()
    {
        echo 'ロケットで飛んでいます。', PHP_EOL;
    }
}