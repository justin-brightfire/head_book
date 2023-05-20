<?php

namespace Commands;

use Command;
use Receiver\CeilingFan;


class CeilingFanOnCommand implements Command
{

    private $ceilingFan;

    public function __construct(CeilingFan $ceilingFan) {
        $this->ceilingFan = $ceilingFan;
    }

    public function execute()
    {
        $this->ceilingFan->on();
    }

    public function undo()
    {
        $this->ceilingFan->off();
    }
}