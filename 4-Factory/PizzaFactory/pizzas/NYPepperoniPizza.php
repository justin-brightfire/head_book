<?php

namespace Pizzas;


use Abstracts\Pizza;

class NYPepperoniPizza extends Pizza
{
    public function __construct()
    {
        $this->name = "New York style sauce, pepperoni, and cheese pizza.";
        $this->dough = "Thin crust dough";
        $this->sauce = "Marinara sauce";

        $this->toppings = ['Grated Reggiano Cheese', 'Pepperoni'];

    }
}