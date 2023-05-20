<?php

namespace Receiver;

class GarageDoor
{
    private $name = '';

    public function __construct(string $name) {
        if (isset($name))
            $this->name = $name;
    }

    public function up(){
        echo 'Garage door opened.' . PHP_EOL;
    }

    public function down(){
        echo 'Garage door is closed. '. PHP_EOL;
    }
}