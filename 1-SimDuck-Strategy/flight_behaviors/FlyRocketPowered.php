<?php

namespace flight_behaviors;

use interfaces\FlyBehavior;

class FlyRocketPowered implements FlyBehavior
{
    public function fly()
    {
        echo 'flying rocket' . PHP_EOL;
    }
}
