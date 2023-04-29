<?php

namespace flight_behaviors;

use interfaces\FlyBehavior;

class FlyNoWay implements FlyBehavior
{
    public function fly()
    {
        echo "I really do not fly" . PHP_EOL;
    }
}