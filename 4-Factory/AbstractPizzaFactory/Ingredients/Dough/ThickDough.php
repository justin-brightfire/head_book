<?php

namespace Ingredients\Dough;

use Ingredients\DoughInterface;

class ThickDough implements DoughInterface
{
    public function __construct()
    {
        echo "Thick Dough \n";
    }
}