<?php

use Commands\CeilingFanOffCommand;
use Commands\CeilingFanOnCommand;
use Commands\LightOffCommand;
use Commands\LightOnCommand;
use Commands\MacroCommand;
use Commands\StereoOffCommand;
use Commands\StereoOnWithCDCommand;
use Receiver\CeilingFan;
use Receiver\Light;
use Receiver\Stereo;

require_once './vendor/autoload.php';

$remote = new RemoteControl();

$ceilingFan = new CeilingFan("Living Room");
$light = new Light("Living Room");
$stereo = new Stereo("Living Room");

$partyOn = array(
    new CeilingFanOnCommand($ceilingFan),
    new LightOnCommand($light),
    new StereoOnWithCDCommand($stereo)
);

$partyOff = [
    new CeilingFanOffCommand($ceilingFan),
    new LightOffCommand($light),
    new StereoOffCommand($stereo)
];

$partyOnMacro = new MacroCommand($partyOn);
$partyOffMacro = new MacroCommand($partyOff);

$remote->setCommand(0, $partyOnMacro, $partyOffMacro);

try {
    $remote->onButtonWasPushed(0);
} catch (Exception $e) {
    echo $e;
}

echo $remote;

try {
    $remote->undoButtonWasPushed();
} catch (Exception $e) {
    echo $e;
}



