<?php

namespace States;

use GumballMachine;

class HasQuarterState implements StateInterface
{
    private $machine;

    public function __construct(GumballMachine $machine)
    {
        $this->machine = $machine;
    }

    public function description(): string
    {
        return "has a quarter. ";
    }

    public function insertQuarter()
    {
        echo "You can't insert another quarter \n";
    }

    public function ejectQuarter()
    {
        echo "Quarter returned \n";

        $this->machine->setState($this->machine->getNoQuarterState());

    }

    public function turnCrank()
    {
        echo "You turned...\n";

        $winner = rand(1, 10);

        //echo "By chance : $winner \n";
        if ($winner === 1 && $this->machine->getCount() > 1) {

            $this->machine->setState($this->machine->getWinnerState());

            return;

        }

        $this->machine->setState($this->machine->getSoldState());
    }

    public function dispense()
    {
        echo "No gumball dispensed \n";
    }
}