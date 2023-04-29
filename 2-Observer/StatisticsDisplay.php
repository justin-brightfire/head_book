<?php

class StatisticsDisplay extends DisplayDevice
{

    private float $temperature;

    /**
     * Update the Observer.
     * @param SplSubject $subject
     * @return void
     */
    public function update(SplSubject $subject)
    {
        $data = $subject->getWeatherData();
        $this->temperature = $data["temperature"];
        $this->display();
    }

    /**
     * Display the data.
     * @return void
     */
    public function display()
    {
        echo "\nSTATS: AVG/MAX/MIN TEMPERATURE: $this->temperature\n";;
    }
}