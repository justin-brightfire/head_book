<?php

namespace Decorators\Coffees;

use Base\Beverage;

/**
 * Dark Roast Decorator
 */
class Dark_Roast extends Beverage
{


    public function __construct()
    {
        $this->description = "Dark Roast";
    }


    public function cost(): float
    {
        return 0.99;
    }
}