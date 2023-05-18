<?php

namespace Ingredients\Veggies;

use Ingredients\VeggiesInterface;

class Spinach implements VeggiesInterface
{
    public function __construct()
    {
        echo "Spinach \n";
    }
}