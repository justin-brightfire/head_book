<?php

namespace AbstractPizzas;

use IngredientFactories\PizzaIngredientFactory;

class CheesePizza extends Pizza
{

    private PizzaIngredientFactory $interface_factory;

    public function __construct(PizzaIngredientFactory $pif){
        $this->interface_factory = $pif;
    }

    public function prepare()
    {
        echo "Preparing $this->name\n";
        $this->dough = $this->interface_factory->createDough();
        $this->sauce = $this->interface_factory->createSauce();
        $this->cheese =$this->interface_factory->createCheese();
    }
}