<?php

/**
 * Implementing the built in subject(publisher) interface SplSubject
 * @see http://php.net/manual/en/class.splsubject.php
 */
class WeatherData implements SplSubject
{
    private $temperature;
    private $humidity;
    private $pressure;

    private $observers = array();

    //Attaching the observer
    public function attach(SplObserver $observer)
    {
        /**
         * Returning a unique hash for each observer
         */
        $uid = spl_object_hash($observer);
        $this->observers[$uid] = $observer;
    }

    //Detaching the observer
    public function detach(SplObserver $observer)
    {
        $uid = spl_object_hash($observer);
        unset($this->observers[$uid]);
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function setWeatherData(array $data)
    {
        //Setters
        $this->temperature = $data['temperature'];
        $this->humidity = $data['humidity'];
        $this->pressure = $data['pressure'];
        //Updating Observers
        $this->notify();
    }

    public function getWeatherData(array $data)
    {
        return array(
            "temperature" => $this->temperature,
            "humidity" => $this->humidity,
            "pressure" => $this->pressure,
        );
    }


}