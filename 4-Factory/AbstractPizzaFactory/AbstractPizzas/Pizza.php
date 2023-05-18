<?php

namespace AbstractPizzas;

use Ingredients\CheeseInterface;
use Ingredients\ClamsInterface;
use Ingredients\DoughInterface;
use Ingredients\PepperoniInterface;
use Ingredients\SauceInterface;

abstract class Pizza
{
    protected string $name;
    protected DoughInterface $dough;
    protected SauceInterface $sauce;
    protected array $veggies = array();
    protected CheeseInterface $cheese;
    protected PepperoniInterface $pepperoni;
    protected ClamsInterface $clams;

    abstract public function prepare();

    public function bake()
    {
        echo "Bake for 25 minute at 350\n";
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