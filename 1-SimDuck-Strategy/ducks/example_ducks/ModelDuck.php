<?php

namespace ducks\example_ducks;

use ducks\BaseDuck;
use flight_behaviors\FlyNoWay;
use quack_behaviors\Quacks;

class ModelDuck extends BaseDuck
{
    public function __construct()
    {
        $this->flyBehavior = new FlyNoWay();
        $this->quackBehavior = new Quacks();
    }

    public function swim()
    {

    }

    public function display()
    {
        echo "I'm a Model duck. " . PHP_EOL;
    }
}