<?php

namespace Ingredients\Veggies;

use Ingredients\VeggiesInterface;

class RedPepper implements VeggiesInterface
{
    public function __construct()
    {
        echo "Red Pepper \n";
    }
}