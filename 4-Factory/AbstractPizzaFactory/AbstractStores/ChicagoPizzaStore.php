<?php

namespace AbstractStores;

use AbstractPizzas\CheesePizza;
use AbstractPizzas\Pizza;
use Exception;
use IngredientFactories\ChicagoPizzaIngredientFactory;

class ChicagoPizzaStore extends PizzaStore
{

    /**
     * @inheritDoc
     * @throws Exception
     */
    protected function createPizza(string $type): Pizza
    {
        $pizza = null;
        $pizzaIngredientFactory = new ChicagoPizzaIngredientFactory();
        switch ($type) {
            case 'cheese':
                $pizza =  new CheesePizza($pizzaIngredientFactory);
                $pizza->setName("Chicago Style Deep Dish Cheese Pizza");
                break;
            default:
                throw new Exception("We dont have $type Pizza");
        }

        return $pizza;
    }
}