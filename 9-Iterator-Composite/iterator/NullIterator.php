<?php

namespace Iterator;

class NullIterator implements IteratorInterface
{

    public function hasNext(): bool
    {
        return false;
    }

    public function next()
    {
        return NULL;
    }
}