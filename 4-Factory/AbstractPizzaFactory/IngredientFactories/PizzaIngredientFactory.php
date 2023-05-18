<?php

namespace IngredientFactories;

use Ingredients\CheeseInterface;
use Ingredients\ClamsInterface;
use Ingredients\DoughInterface;
use Ingredients\PepperoniInterface;
use Ingredients\SauceInterface;

interface PizzaIngredientFactory
{
    //set of related products
    public function createDough(): DoughInterface;

    public function createSauce(): SauceInterface;

    public function createCheese(): CheeseInterface;

    public function createVeggies(): array;

    public function createPepperoni(): PepperoniInterface;

    public function createClam(): ClamsInterface;
}