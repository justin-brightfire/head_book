<?php

namespace Pizzas;

abstract class Pizza
{
    protected string $name;
    protected string $dough;
    protected string $sauce;
    protected array $toppings = array();

    public function prepare(): void
    {
        echo "Preparing " . $this->name . PHP_EOL .
            "Tossing dough..." . PHP_EOL .
            "Adding sauce..." . PHP_EOL .
            "Adding toppings:";
        foreach ($this->toppings as $k => $t) {
            echo " " . $t;
        }
        echo PHP_EOL;
    }

    public function bake()
    {
        echo "Bake for 25 minutes at 350\n";
    }

    public function cut()
    {
        echo "Cutting the pizza into diagonal slices\n";
    }

    public function box()
    {
        echo "Place Pizza in official PizzaStore box\n\n";
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function __toString()
    {
        return $this->name;
    }

}