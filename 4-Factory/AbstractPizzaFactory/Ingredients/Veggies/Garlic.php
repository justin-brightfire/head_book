<?php

namespace Ingredients\Veggies;

use Ingredients\VeggiesInterface;

class Garlic implements VeggiesInterface
{
    public function __construct()
    {
        echo "Garlic \n";
    }
}