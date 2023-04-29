<?php

namespace quack_behaviors;

use interfaces\QuackBehavior;

class Squeak implements QuackBehavior
{
    public function quack()
    {
        echo 'Squeak' . PHP_EOL;
    }
}