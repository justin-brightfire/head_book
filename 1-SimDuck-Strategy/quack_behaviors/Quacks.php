<?php

namespace quack_behaviors;

use interfaces\QuackBehavior;

class Quacks implements QuackBehavior
{
    public function quack()
    {
        echo 'quackers quack' . PHP_EOL;
    }
}