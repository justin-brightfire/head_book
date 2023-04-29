<?php

namespace ducks;

use interfaces\FlyBehavior;
use interfaces\QuackBehavior;

abstract class BaseDuck
{

    /**
     * Instance members holding references to specific behaviors at runtime.
     *
     * @var [type]
     */
    protected $flyBehavior;
    protected $quackBehavior;


    /**
     *Methods that replace.
     *
     * @return void
     */
    abstract public function swim();

    abstract public function display();

    public function performFly()
    {
        $this->flyBehavior->fly();
    }

    public function performQuack()
    {
        $this->quackBehavior->quack();
    }


    /**
     * Can call these to change a duck on the fly.
     *
     * @param FlyBehavior $fb
     * @return void
     */
    public function setFlyBehavior(FlyBehavior $fb)
    {
        $this->flyBehavior = $fb;
    }

    public function setQuackBehavior(QuackBehavior $fb)
    {
        $this->quackBehavior = $fb;
    }

}