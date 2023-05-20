<?php

namespace Commands;

use Command;

class NoCommand implements Command
{

    public function execute()
    {
       echo 'No command is set.' . PHP_EOL;
    }

    public function undo(){}
}