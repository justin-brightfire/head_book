<?php

namespace Commands;

use Command;
use Receiver\Stereo;

class StereoOffCommand implements Command
{
    private $stereo;

    private function __construct(Stereo $stereo) {
        $this->stereo = $stereo;
    }

    public function execute()
    {
        $this->stereo->off();
    }

    public function undo()
    {
        $this->stereo->on();
    }
}