<?php

namespace Menu;

use Iterator\IteratorInterface;
use UnsupportedException;

abstract class MenuComponent
{
    // hierarchy operations
    /**
     * @throws UnsupportedException
     */
    public function add(MenuComponent $menuComponent){
        throw new UnsupportedException();
    }

    /**
     * @throws UnsupportedException
     */
    public function remove(MenuComponent $menuComponent){
        throw new UnsupportedException();
    }

    /**
     * @throws UnsupportedException
     */
    public function getChild(int $i) : MenuComponent {
        throw new UnsupportedException();
    }
    // operations related to menus / menu items

    /**
     * @throws UnsupportedException
     */
    public function getName() : string {
        throw new UnsupportedException();
    }

    /**
     * @throws UnsupportedException
     */
    public function getDescription() : string {
        throw new UnsupportedException();
    }

    /**
     * @throws UnsupportedException
     */
    public function getPrice() : float {
        throw new UnsupportedException();
    }

    /**
     * @throws UnsupportedException
     */
    public function isVegetarian() : bool {
        throw new UnsupportedException();
    }

    /**
     * @throws UnsupportedException
     */
    public function print(){
        throw new UnsupportedException();
    }
    abstract public function createIterator() : IteratorInterface ;

}