<?php

namespace Adapters;

use Birds\Duck;
use Birds\Turkey;

class DuckAdapter implements Turkey
{
    private $duck;

    public function __construct(Duck $duck)
    {
        $this->duck = $duck;
    }

    public function gobble()
    {
        $this->duck->quack();
    }

    public function fly()
    {
        $this->duck->fly();
    }
}
