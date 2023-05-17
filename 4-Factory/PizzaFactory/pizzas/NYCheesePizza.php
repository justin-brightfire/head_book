<?php

namespace Pizzas;


class NYCheesePizza extends Pizza
{
    public function __construct(){
        $this->name = "New York style sauce and cheese pizza.";
        $this->dough = "Thin crust dough";
        $this->sauce = "Marinara sauce";

        $this->toppings = ['Grated Reggiano Cheese'];

    }
}