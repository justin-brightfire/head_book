<?php

namespace Ingredients\Veggies;

use Ingredients\VeggiesInterface;

class Mushroom implements VeggiesInterface
{
    public function __construct()
    {
        echo "Mushrooms \n";
    }
}