<?php

use Adapters\TurkeyAdapter;
use Birds\Duck;
use Birds\MallardDuck;
use Birds\WildTurkey;


require_once './vendor/autoload.php';

$duck = new MallardDuck();
$turkey = new WildTurkey();

//Converts turkey to duck;
$just_a_normal_duck = new TurkeyAdapter($turkey);

echo "The Turkey says.. \n";
$turkey->gobble();
$turkey->fly();

echo PHP_EOL;

echo "The Duck says.. \n";

$duck->quack();
$duck->fly();

echo PHP_EOL;


echo "The Turkey Adapter says..\n";
legitDuckTest($just_a_normal_duck);
echo PHP_EOL;

function legitDuckTest (Duck $duck) {
    $duck->quack();
    $duck->fly();
}

