<?php

namespace Ingredients\Sauce;

use Ingredients\SauceInterface;

class MarinaraSauce implements SauceInterface
{
    public function __construct()
    {
        echo "Marinara Sauce \n";
    }
}