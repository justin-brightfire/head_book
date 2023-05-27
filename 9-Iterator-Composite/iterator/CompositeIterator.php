<?php

namespace Iterator;

use Menu\Menu;

class CompositeIterator implements IteratorInterface
{
    private array $stack = array();

    public function __construct(IteratorInterface $iterator)
    {
        $this->stack[] = $iterator;
    }

    public function hasNext(): bool
    {
        if (count($this->stack) <= 0) return false;

        $iterator = $this->array_peek($this->stack);

        if (!$iterator->hasNext()) {
            array_pop($this->stack);
            return $this->hasNext();
        }

        return true;
    }

    public function next()
    {
        if ($this->hasNext()) {

            $iterator = $this->array_peek($this->stack);
            $component = $iterator->next();

            if ($component instanceof Menu) {
                $this->stack[] = $component->createIterator();
            }

            return $component;

        }

        return NULL;
    }

    private function array_peek(array $array)
    {
        return $array[count($array) - 1];
    }

}