<?php

namespace Ingredients\Clams;

use Ingredients\ClamsInterface;

class FrozenClams implements ClamsInterface
{
    public function __construct()
    {
        echo "Frozen Clams \n";
    }
}