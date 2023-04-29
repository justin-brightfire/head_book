<?php

namespace ducks\example_ducks;

use ducks\BaseDuck;
use flight_behaviors\FlyWithWings;
use quack_behaviors\Quacks;

class MallardDuck extends BaseDuck
{
    public function __construct()
    {
        $this->quackBehavior = new Quacks();
        $this->flyBehavior = new FlyWithWings();
    }

    public function swim()
    {

    }

    public function display()
    {
        echo "I'm a Mallard!" . PHP_EOL;
    }
}