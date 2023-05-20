<?php

namespace Commands;

use Command;
use Receiver\Stereo;

class StereoOnWithCDCommand implements Command
{
    private $stereo;

    private function __construct(Stereo $stereo) {
        $this->stereo = $stereo;
    }

    public function execute()
    {
        $this->stereo->on();
        $this->stereo->setCD();
        $this->stereo->setVolume(11);

    }

    public function undo()
    {
        $this->stereo->off();
    }
}