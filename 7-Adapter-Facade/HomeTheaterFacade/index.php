<?php

use Components\Amplifier;
use Components\CDPlayer;
use Components\DVDPlayer;
use Components\PopcornPopper;
use Components\Projector;
use Components\Screen;
use Components\TheaterLights;
use Components\Tuner;

require_once './vendor/autoload.php';

$amp = new Amplifier();
$tuner = new Tuner();
$dvd = new DvdPlayer();
$cd = new CdPlayer;
$projector = new Projector();
$screen = new Screen();
$lights = new TheaterLights();
$popper = new PopcornPopper();

$homeTheater = new HomeTheaterFacade(
    $amp , $tuner , $dvd , $cd ,
    $projector , $screen , $lights ,$popper
);

$homeTheater->watchMovie("Dude Where's My Car");
echo PHP_EOL;
$homeTheater->endMovie();