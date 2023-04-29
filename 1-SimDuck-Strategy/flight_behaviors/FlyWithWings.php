<?php

namespace flight_behaviors;

use interfaces\FlyBehavior;

class FlyWithWings implements FlyBehavior
{
    public function fly()
    {
        echo 'flying duck' . PHP_EOL;
    }
}
