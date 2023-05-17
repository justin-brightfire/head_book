<?php

namespace Stores;

use Abstracts\Pizza;
use Abstracts\PizzaStore;
use Pizzas\NYCheesePizza;
use Pizzas\NYPepperoniPizza;
use Pizzas\NYVeggiePizza;


/**
 * Used for creating NY style pizzas.
 */
class NYPizzaStore extends PizzaStore
{
    protected function createPizza(string $type): Pizza
    {
        switch ($type) {
            case 'veggie':
                return new NYVeggiePizza();
            case 'pepperoni':
                return new NYPepperoniPizza();
            default:
                return new NYCheesePizza();
        }
    }
}