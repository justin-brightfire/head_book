<?php

namespace Commands;

use Command;

class MacroCommand implements Command
{
    private $commands = array();

    public function __construct(array $cmds) {
        $this->commands = $cmds;
    }

    public function execute()
    {
        foreach ($this->commands as $command) {
            $command->execute();
        }
    }

    public function undo()
    {
        foreach ($this->commands as $command) {
            $command->undo();
        }
    }
}