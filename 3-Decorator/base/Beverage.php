<?php

namespace Base;
/**
 * The abstract Base Class we intend to decorate
 */
abstract class Beverage
{
    protected string $description = "Unknown Bevvy";

    public function getDescription(): string
    {
        return $this->description;
    }

    abstract public function cost(): float;
}