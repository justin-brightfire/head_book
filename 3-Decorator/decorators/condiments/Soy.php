<?php

namespace Decorators\Condiments;

use Base\Beverage;

/**
 * Condiment Decorator
 */
class Soy extends Condiment_Decorator
{
    public function __construct(Beverage $beverage)
    {
        $this->description = "Soy";
        $this->beverage = $beverage;
    }

    public function cost(): float
    {
        return 0.15 + $this->beverage->cost();
    }
}