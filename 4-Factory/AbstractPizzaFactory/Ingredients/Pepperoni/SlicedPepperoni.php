<?php

namespace Ingredients\Pepperoni;

use Ingredients\PepperoniInterface;

class SlicedPepperoni implements PepperoniInterface
{
    public function __construct()
    {
        echo "Sliced Pepperoni \n";
    }
}