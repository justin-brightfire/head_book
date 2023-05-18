<?php

namespace Ingredients\Cheese;

use Ingredients\CheeseInterface;

class MozzarellaCheese implements CheeseInterface
{
    public function __construct()
    {
        echo "Mozzarella Cheese \n";
    }
}