<?php

namespace Ingredients\Veggies;

use Ingredients\VeggiesInterface;

class EggPlant implements VeggiesInterface
{
    public function __construct()
    {
        echo "EggPlant \n";
    }
}