<?php

namespace Ingredients\Veggies;

use Ingredients\VeggiesInterface;

class Onion implements VeggiesInterface
{
    public function __construct()
    {
        echo "Onions \n";
    }
}