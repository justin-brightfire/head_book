<?php
namespace IngredientFactories;

use Ingredients\CheeseInterface;
use Ingredients\DoughInterface;
use Ingredients\PepperoniInterface;
use Ingredients\ClamsInterface;


use Ingredients\Dough\ThickDough;
use Ingredients\Sauce\PlumTomatoSauce;
use Ingredients\Cheese\MozzarellaCheese;
use Ingredients\Pepperoni\SlicedPepperoni;
use Ingredients\Clams\FrozenClams;

use Ingredients\SauceInterface;
use Ingredients\Veggies\Olives;
use Ingredients\Veggies\Spinach;
use Ingredients\Veggies\EggPlant;

class ChicagoPizzaIngredientFactory implements PizzaIngredientFactory
{

    public function createDough(): DoughInterface
    {
        return new ThickDough();
    }

    public function createSauce(): SauceInterface
    {
        return new PlumTomatoSauce();
    }

    public function createCheese(): CheeseInterface
    {
        return new MozzarellaCheese();
    }
    public function createVeggies(): array
    {
        return [new Olives(), new Spinach() , new EggPlant()];
    }
    public function createPepperoni(): PepperoniInterface
    {
        return new SlicedPepperoni();
    }
    public function createClam(): ClamsInterface
    {
        return new FrozenClams();
    }
}