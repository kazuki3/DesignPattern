<?php

require_once 'FlyBehavior.php';

class FlyNoWays implements FlyBehavior
{
    public function fly()
    {
        echo '飛べません。', PHP_EOL;
    }
}