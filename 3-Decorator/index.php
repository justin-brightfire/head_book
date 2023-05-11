<?php
use Decorators\Coffees\Dark_Roast;
use Decorators\Coffees\Espresso;
use Decorators\Coffees\House_Blend;
use Decorators\Condiments\Condiment_Pretty;
use Decorators\Condiments\Mocha;
use Decorators\Condiments\Soy;
use Decorators\Condiments\Whip;

require_once './vendor/autoload.php';


//* Order up an Espresso straight
$beverage = new Espresso();
echo $beverage->getDescription() . " $" . $beverage->cost() . PHP_EOL;

//* Make DarkRoast with double mocha and whip
$beverage2 = new Dark_Roast();
$beverage2 = new Mocha($beverage2);
$beverage2 = new Mocha($beverage2);
$beverage2 = new Whip($beverage2);

echo $beverage2->getDescription() . " $" . $beverage2->cost() . PHP_EOL;

//*  give us a HouseBlend with Soy, Mocha, and Whip

$beverage3 = new House_Blend();
$beverage3 = new Soy($beverage3);
$beverage3 = new Mocha($beverage3);
$beverage3 = new Whip($beverage3);

echo $beverage3->getDescription() . " $" . $beverage3->cost() . PHP_EOL;

//* PrettyPrint Make DarkRoast with double mocha and whip
$beverage4 = new Dark_Roast();
$beverage4 = new Whip($beverage4);
$beverage4 = new Mocha($beverage4);
$beverage4 = new Mocha($beverage4);
$beverage4 = new Condiment_Pretty($beverage4);

echo $beverage4->getDescription() . " $" . $beverage4->cost() . PHP_EOL;