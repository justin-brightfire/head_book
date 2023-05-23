<?php

abstract class CaffeineBeverage
{
    final public function prepareRecipe()
    {
        $this->boilWater();
        $this->brew();
        $this->pourInCup();
        $this->addCondiments();
    }

    abstract protected function brew();

    abstract protected function addCondiments();

    private function boilWater(){
        echo "Boiling water " . PHP_EOL;
    }

    private function pourInCup(){
        echo "Pouring in cup " . PHP_EOL;
    }
}