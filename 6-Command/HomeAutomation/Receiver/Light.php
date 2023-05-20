<?php

namespace Receiver;

class Light
{
    private $name = '';

    public function __construct(string $name) {
        if (isset($name))
            $this->name = $name;
    }

    public function on(){
        echo $this->name . ' Light is ON.' . PHP_EOL;
    }

    public function off(){
        echo $this->name . ' Light is OFF. ' . PHP_EOL;
    }
}