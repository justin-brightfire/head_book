<?php

use Commands\NoCommand;

class RemoteControl
{

    private $onCommands = array();

    private $offCommands = array();

    private $undoCommand;

    public function __construct()
    {
        $NoCommand = new NoCommand();

        for ($i = 0; $i < 7; $i++) {
            $this->onCommands[$i] = $NoCommand;
            $this->offCommands[$i] = $NoCommand;
        }

        $this->undoCommand = $NoCommand;
    }

    /**
     * @param int $slot
     * @param Command $on
     * @param Command $off
     */
    public function setCommand(int $slot, Command $on, Command $off): void
    {
        $this->onCommands[$slot] = $on;
        $this->offCommands[$slot] = $off;
    }

    /**
     * Fires On Commands
     *
     * @param int $slot
     * @throws Exception
     */
    public function onButtonWasPushed(int $slot)
    {
        if (isset($this->onCommands[$slot])) {
            $this->onCommands[$slot]->execute();
            $this->undoCommand = $this->onCommands[$slot];
        } else throw new Exception('Slot is empty!');
    }

    /**
     * Fires Off Commands
     *
     * @param int $slot
     * @throws Exception
     */
    public function offButtonWasPushed(int $slot)
    {
        if (isset($this->offCommands[$slot])) {
            $this->offCommands[$slot]->execute();
            $this->undoCommand = $this->offCommands[$slot];
        } else throw new Exception('Slot is empty!');
    }

    /**
     * Fires Undo Commands
     *
     * @throws Exception
     */
    public function undoButtonWasPushed()
    {
        echo "[ <-undo ] : \n";
        $this->undoCommand->undo();
    }

    private function class_name($class): string
    {
        $className = get_class($class);
        $lastSlash = strpos($className, '\\') + 1;
        $className = substr($className, $lastSlash);
        return $className;
    }

    public function __toString()
    {
        $str = "\n-------- Remote Control --------\n";
        for ($i = 0; $i < count($this->onCommands); $i++) {
            $str .= "[slot $i] | " .
                $this->class_name($this->onCommands[$i])
                . " | " . $this->class_name($this->offCommands[$i]) . "\n";
        }

        $str .= "[undo] " . $this->class_name($this->undoCommand) . "\n"
            . "--------------------------------\n\n";
        return $str;
    }

}