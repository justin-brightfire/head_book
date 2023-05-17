<?php

namespace Pizzas;


class NYVeggiePizza extends Pizza
{
    public function __construct(){
        $this->name = "New York style sauce, veggie, and cheese pizza.";
        $this->dough = "Thin crust dough";
        $this->sauce = "Marinara sauce";

        $this->toppings = ['Grated Reggiano Cheese', 'peppers', 'mushrooms', 'olives'];

    }
}