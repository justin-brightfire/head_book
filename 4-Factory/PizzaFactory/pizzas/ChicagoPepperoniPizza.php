<?php

namespace Pizzas;

use Abstracts\Pizza;

class ChicagoPepperoniPizza extends Pizza
{
    public function __construct(){
        $this->name = "Chicago style sauce and cheese pizza.";
        $this->dough = "Thick and oily crust dough";
        $this->sauce = "Plum Tomato sauce";

        $this->toppings = ['Thick Mozzarella', 'pepperoni'];

    }
}