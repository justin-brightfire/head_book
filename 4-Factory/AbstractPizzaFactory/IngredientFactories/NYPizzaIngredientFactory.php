<?php
namespace IngredientFactories;

use Ingredients\DoughInterface;
use Ingredients\SauceInterface;
use Ingredients\CheeseInterface;
use Ingredients\ClamsInterface;
use Ingredients\PepperoniInterface;

use Ingredients\Veggies\Garlic;
use Ingredients\Veggies\RedPepper;
use Ingredients\Veggies\Onion;
use Ingredients\Veggies\Mushroom;

use Ingredients\Dough\ThinDough;
use Ingredients\Sauce\MarinaraSauce;
use Ingredients\Cheese\ReggianoCheese;
use Ingredients\Pepperoni\SlicedPepperoni;
use Ingredients\Clams\FreshClams;

class NYPizzaIngredientFactory implements PizzaIngredientFactory
{

    public function createDough(): DoughInterface
    {
        return new ThinDough();
    }

    public function createSauce(): SauceInterface
    {
        return new MarinaraSauce();
    }

    public function createCheese(): CheeseInterface
    {
        return new ReggianoCheese();
    }
    public function createVeggies(): array
    {
        return [new Garlic(), new Onion() , new Mushroom() , new RedPepper()];
    }
    public function createPepperoni(): PepperoniInterface
    {
        return new SlicedPepperoni();
    }
    public function createClam(): ClamsInterface
    {
        return new FreshClams();
    }
}