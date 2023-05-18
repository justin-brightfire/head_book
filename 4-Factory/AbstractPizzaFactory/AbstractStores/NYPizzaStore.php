<?php

namespace AbstractStores;

use AbstractPizzas\CheesePizza;
use AbstractPizzas\Pizza;
use Exception;
use IngredientFactories\NYPizzaIngredientFactory;

class NYPizzaStore extends PizzaStore
{

    /**
     * @inheritDoc
     * @throws Exception
     */
    protected function createPizza(string $type): Pizza
    {
        $pizza = null;
        $pizzaIngredientFactory = new NYPizzaIngredientFactory();
        switch ($type) {
            case 'cheese':
                $pizza =  new CheesePizza($pizzaIngredientFactory);
                $pizza->setName("New York Style Cheese Pizza");
                break;
            default:
                throw new Exception("We dont have $type Pizza");
        }

        return $pizza;
    }
}