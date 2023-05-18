<?php

namespace Ingredients\Clams;

use Ingredients\ClamsInterface;

class FreshClams implements ClamsInterface
{
    public function __construct()
    {
        echo "Fresh Clams \n";
    }
}