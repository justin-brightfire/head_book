<?php

abstract class DisplayDevice implements SplObserver
{

    /**
     * This is in place to have a reference to un-register here.
     * @var SplSubject
     */
    private $weatherSubject;

    public function __construct(SplSubject $subject) {
        $this->weatherSubject = $subject;
        $this->weatherSubject->attach($this);
    }

    public function unsubscribe() {
        $this->weatherSubject->detach($this);
    }

    public function resubscribe() {
        $this->weatherSubject->attach($this);
    }

    abstract public function display();
}