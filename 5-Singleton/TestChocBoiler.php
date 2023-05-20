<?php

class TestChocBoiler
{
    public function testFillChocBoiler(){
        echo "Filling the boiler from Testing class.\n" . PHP_EOL;
        $boiler = ChocolateBoiler::getInstance();
        $boiler->fill();
    }

//    public function testDrainChocBoiler(){
//        echo "Filling the boiler from Testing class.\n" . PHP_EOL;
//        $boiler = ChocolateBoiler::getInstance();
//        $boiler->drain();
//    }
//
//    public function testBoilChocBoiler(){
//        echo "Filling the boiler from Testing class.\n" . PHP_EOL;
//        $boiler = ChocolateBoiler::getInstance();
//        $boiler->boil();
//    }
}