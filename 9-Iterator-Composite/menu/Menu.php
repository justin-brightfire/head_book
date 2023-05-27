<?php

namespace Menu;

use Iterator\CompositeIterator;
use Iterator\IteratorInterface;
use Iterator\MenuCompositeIterator;

class Menu extends MenuComponent
{
    private array $menuComponents = array();
    private string $name;
    private string $description;

    private ?CompositeIterator $compositeIterator = NULL;

    public function __construct(string $name, string $description)
    {
        $this->name = $name;
        $this->description = $description;
    }

    public function add(MenuComponent $menuComponent)
    {
        $this->menuComponents[] = $menuComponent;
    }

    public function remove(MenuComponent $menuComponent)
    {
        $this->menuComponents = array_diff($this->menuComponents, array($menuComponent));
    }

    public function getChild(int $i): MenuComponent
    {
        return $this->menuComponents[$i];
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function print()
    {
        echo PHP_EOL . $this->getName();
        echo ", " . $this->getDescription() . PHP_EOL;
        echo "-----------------------------" . PHP_EOL;

        $iterator = new MenuCompositeIterator($this->menuComponents);

        while ($iterator->hasNext()) {
            $menuComponent = $iterator->next();
            $menuComponent->print();
        }

    }

    public function createIterator(): IteratorInterface
    {
        if (is_null($this->compositeIterator))

            $this->compositeIterator = new CompositeIterator(
                new MenuCompositeIterator($this->menuComponents)
            );

        return $this->compositeIterator;

    }

}