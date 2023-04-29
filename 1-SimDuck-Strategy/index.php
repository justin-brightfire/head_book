<?php

/**
 * Instantiating all the things.
 */

use ducks\example_ducks\MallardDuck;
use ducks\example_ducks\ModelDuck;
use flight_behaviors\FlyRocketPowered;

require_once './vendor/autoload.php';


$mallard = new MallardDuck();
$mallard->display();
$mallard->performFly();
$mallard->performQuack();


$wood_duck = new ModelDuck();
$wood_duck->display();
$wood_duck->performFly();
$wood_duck->performQuack();

// Changing behavior via the inferface.
$wood_duck->setFlyBehavior(new FlyRocketPowered());
$wood_duck->performFly();

