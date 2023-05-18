<?php
require_once './vendor/autoload.php';

use Stores\NYPizzaStore;
use Stores\ChicagoPizzaStore;

$ny_store = new NYPizzaStore();
$chicago_store = new ChicagoPizzaStore();

$ny_store->orderPizza("cheese");

$chicago_store->orderPizza("cheese");