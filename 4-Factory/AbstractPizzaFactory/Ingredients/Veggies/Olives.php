<?php

namespace Ingredients\Veggies;

use Ingredients\VeggiesInterface;

class Olives implements VeggiesInterface
{
    public function __construct()
    {
        echo "Black Olives \n";
    }
}