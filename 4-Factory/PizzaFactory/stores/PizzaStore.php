<?php

namespace Stores;

use Pizzas\Pizza;

/**
 * This is a factory class and this is where it starts, an abstract interface.
 * Creates ONE product.
 */
abstract class PizzaStore
{

    public function orderPizza(string $type): Pizza
    {
        $pizza = $this->createPizza($type);

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }

    protected abstract function createPizza(string $type): Pizza;
}