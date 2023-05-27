<?php

namespace Iterator;

class MenuCompositeIterator implements IteratorInterface
{
    private array $menuItems;
    private int $index = 0;

    public function __construct(array $array){
        $this->menuItems = $array;
    }

    public function hasNext(): bool
    {
        if($this->index >= count($this->menuItems))
            return false;
        return true;
    }

    public function next()
    {
        return $this->menuItems[$this->index++];
    }
}