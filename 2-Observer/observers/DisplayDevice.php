<?php

namespace Observers;
use SplObserver;
use SplSubject;

/**
 * The Base Display Device Class.
 */
abstract class DisplayDevice implements SplObserver
{

    /**
     * This is in place to have a reference to un-register here.
     * @var SplSubject
     */
    private SplSubject $weatherSubject;

    /**
     * Constructor.
     *
     * @param SplSubject $subject
     */
    public function __construct(SplSubject $subject)
    {
        $this->weatherSubject = $subject;
        $this->weatherSubject->attach($this);
    }

    /**
     * Unsubscribe Observer.
     * @return void
     */
    public function unsubscribe()
    {
        $this->weatherSubject->detach($this);
    }

    /**
     * Resubscribe Observer.
     * @return void
     */
    public function resubscribe()
    {
        $this->weatherSubject->attach($this);
    }

    /**
     * Display data abstracted.
     * @return mixed
     */
    abstract public function display();
}