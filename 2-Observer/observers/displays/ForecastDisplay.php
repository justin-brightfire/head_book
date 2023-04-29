<?php

namespace Observers\Displays;

use observers\DisplayDevice;
use SplSubject;

/**
 * Display weather forecast.
 */
class ForecastDisplay extends DisplayDevice
{

    private float $temperature;
    private float $humidity;
    private float $pressure;

    /**
     * Update Observer.
     * @param SplSubject $subject
     * @return void
     */
    public function update(SplSubject $subject)
    {
        $data = $subject->getWeatherData();
        $this->temperature = $data['temperature'];
        $this->humidity = $data['humidity'];
        $this->pressure = $data['pressure'];
        $this->display();
    }

    /**
     * Display data.
     * @return void
     */
    public function display()
    {
        echo "\n~~~~Forecast~~~~\n" .
            "$this->temperature" . "F degree and" .
            " Humidity $this->humidity% also Pressure is $this->pressure" .
            "Pa\n~~~~~~~~~~~~~~~~\n";
    }
}