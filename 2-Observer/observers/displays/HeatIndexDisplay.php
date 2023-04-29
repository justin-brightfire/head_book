<?php

namespace Observers\Displays;

use observers\DisplayDevice;
use SplSubject;

/**
 * The Heat Index Display
 */
class HeatIndexDisplay extends DisplayDevice
{
    private float $temperature;
    private float $humidity;
    private float $heatIndex;

    /**
     * Update the Observer
     * @param SplSubject $subject the subject being observed.
     * @inheritDoc
     */
    public function update(SplSubject $subject)
    {
        $data = $subject->getWeatherData();
        $this->temperature = $data["temperature"];
        $this->humidity = $data["humidity"];

        $this->heatIndex = $this->computeHeatIndex(
            $this->temperature,
            $this->humidity
        );
        $this->display();
    }

    /**
     * Display the Heat Index
     * @return void
     */
    public function display()
    {
        echo "\n+++++HEAT_INDEX+++++\n"
            . $this->heatIndex
            . "\n++++++++++++++++++++\n";
    }

    /**
     * Doing maths to calculate Heat Index correctly.
     *
     * @param float $t temperature.
     * @param float $rh humidity.
     * @return float
     */
    private function computeHeatIndex(float $t, float $rh): float
    {
        return ((16.923 + (0.185212 * $t) + (5.37941 * $rh) - (0.100254 * $t * $rh) +
                (0.00941695 * ($t * $t)) + (0.00728898 * ($rh * $rh)) +
                (0.000345372 * ($t * $t * $rh)) - (0.000814971 * ($t * $rh * $rh)) +
                (0.0000102102 * ($t * $t * $rh * $rh)) - (0.000038646 * ($t * $t * $t)) + (0.0000291583 *
                    ($rh * $rh * $rh)) + (0.00000142721 * ($t * $t * $t * $rh)) +
                (0.000000197483 * ($t * $rh * $rh * $rh)) - (0.0000000218429 * ($t * $t * $t * $rh * $rh)) +
                0.000000000843296 * ($t * $t * $rh * $rh * $rh)) -
            (0.0000000000481975 * ($t * $t * $t * $rh * $rh * $rh)));
    }
}