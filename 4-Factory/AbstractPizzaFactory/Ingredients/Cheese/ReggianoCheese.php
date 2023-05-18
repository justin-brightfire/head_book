<?php

namespace Ingredients\Cheese;

use Ingredients\CheeseInterface;

class ReggianoCheese implements CheeseInterface
{
    public function __construct()
    {
        echo "Reggiano Cheese \n";
    }
}