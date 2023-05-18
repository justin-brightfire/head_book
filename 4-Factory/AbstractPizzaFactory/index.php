<?php

require_once './vendor/autoload.php';

use AbstractStores\ChicagoPizzaStore;
use AbstractStores\NYPizzaStore;


$nyStore = new NYPizzaStore();
$chicagoStore = new ChicagoPizzaStore();

$nyStore->orderPizza("cheese");

$chicagoStore->orderPizza("cheese");