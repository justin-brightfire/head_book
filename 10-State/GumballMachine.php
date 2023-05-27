<?php

use States\NoQuarterState;
use States\HasQuarterState;
use States\SoldOutState;
use States\SoldState;
use States\StateInterface;
use States\WinnerState;

class GumballMachine
{
    private SoldOutState $soldOutState;
    private NoQuarterState $noQuarterState;
    private HasQuarterState $hasQuarterState;
    private SoldState $soldState;

    private WinnerState $winnerState;

    private $state;

    private int $count = 0;

    public function __construct(int $numberOfGumballs)
    {
        $this->soldOutState = new SoldOutState($this);
        $this->noQuarterState = new NoQuarterState($this);
        $this->hasQuarterState = new HasQuarterState($this);
        $this->soldState = new SoldState($this);

        $this->winnerState = new WinnerState($this);

        $this->count = $numberOfGumballs;
        if ($this->count > 0) {
            $this->state = $this->noQuarterState;
        } else {
            $this->state = $this->soldOutState;
        }
    }

    public function insertQuarter()
    {
        $this->state->insertQuarter();
    }

    public function ejectQuarter()
    {
        $this->state->ejectQuarter();
    }

    public function turnCrank()
    {
        $this->state->turnCrank();
        $this->state->dispense();
    }

    public function setState(StateInterface $state)
    {
        $this->state = $state;
    }

    public function releaseBall()
    {
        echo "A gumball comes rolling out the slot...\n";
        if ($this->count !== 0) {
            $this->count -= 1;
        }

    }

    public function getCount(): int
    {
        return $this->count;
    }

    public function getNoQuarterState(): NoQuarterState
    {
        return $this->noQuarterState;
    }

    public function getHasQuarterState(): HasQuarterState
    {
        return $this->hasQuarterState;
    }

    public function getSoldOutState(): SoldOutState
    {
        return $this->soldOutState;
    }

    public function getSoldState(): SoldState
    {
        return $this->soldState;
    }

    public function getWinnerState(): WinnerState
    {
        return $this->winnerState;
    }

    public function refill(int $numberOfGumballs)
    {
        $this->count += $numberOfGumballs;
        $this->setState($this->getNoQuarterState());
    }

    public function __toString()
    {
        return "\nMighty Gumball, Inc.\n"
            . "PHP-enabled Standing Gumball Model #2018\n"
            . "Inventory: " . $this->getCount() . " gumballs\n"
            . "Machine " . $this->state->description() . "\n";
    }

}