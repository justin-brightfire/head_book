<?php

require_once './vendor/autoload.php';

$teaHook = new TeaWithHook();
$coffeeHook = new CoffeeWithHook();

echo "\n Making the tea...\n";
$teaHook->prepareRecipe();

echo "\n Making the coffee...\n";
$coffeeHook->prepareRecipe();