<?php

namespace quack_behaviors;

use interfaces\QuackBehavior;

class MuteQuack implements QuackBehavior
{
    public function quack()
    {
        echo '<<Silence>>';
    }
}