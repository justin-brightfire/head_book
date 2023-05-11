<?php

namespace Decorators\Condiments;

use Base\Beverage;

/**
 * Condiment Decorator
 */
class Mocha extends Condiment_Decorator
{

    public function __construct(Beverage $beverage){
        $this->description = "Mocha";
        $this->beverage = $beverage;
    }
    public function cost(): float
    {
        return 0.20 + $this->beverage->cost();
    }
}