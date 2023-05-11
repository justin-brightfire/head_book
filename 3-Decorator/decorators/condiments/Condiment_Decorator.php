<?php

namespace Decorators\Condiments;

use Base\Beverage;

/**
 * Condiment Base Decorator
 */
abstract class Condiment_Decorator extends Beverage
{

    protected Beverage $beverage;

    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ", " . $this->description;
    }
}