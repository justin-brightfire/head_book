<?php

namespace Ingredients\Dough;

use Ingredients\DoughInterface;

class ThinDough implements DoughInterface
{
    public function __construct()
    {
        echo "Thin Dough \n";
    }
}