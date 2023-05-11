<?php

namespace Decorators\Coffees;

use Base\Beverage;

class House_Blend extends Beverage
{

    public function __construct()
    {
        $this->description = "House Blend Coffee";
    }

    public function cost(): float
    {
        return 0.89;
    }
}