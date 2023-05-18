<?php

namespace Ingredients\Sauce;

use Ingredients\SauceInterface;

class PlumTomatoSauce implements SauceInterface
{
    public function __construct()
    {
        echo "Plum Tomato Sauce \n";
    }
}