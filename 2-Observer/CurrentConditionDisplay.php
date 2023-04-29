<?php

class CurrentConditionDisplay extends DisplayDevice
{

    private float $temperature;
    private float $humidity;

    /**
     * Update the Observer.
     *
     * @param SplSubject $subject
     * @return void
     */
    public function update(SplSubject $subject)
    {
        $data = $subject->getWeatherData();
        $this->temperature = $data["temperature"];
        $this->humidity = $data["humidity"];
        $this->display();
    }

    /**
     * Display the data.
     *
     * @return void
     */
    public function display()
    {
        echo "\nCurrent condition: $this->temperature" . "F degree and" .
            " Humidity $this->humidity%\n";
    }
}