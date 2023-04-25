<?php

abstract class Duck
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
     *@return void
     */
    abstract public function swim();
    abstract public function display();

    public function performFly() {
        $this->flyBehavior->fly();
    }

    public function performQuack() {
        $this->quackBehavior->quack();
    }

    /**
     * Can call these methods to change the behavior of a flying duck.
     */

    public function setFlyBehavior(FlyBehavior $fb) {
        $this->flyBehavior = $fb;
    }

    public function setFlyBehavior(QuackBehavior $fb) {
        $this->quackBehavior = $fb;
    }

}