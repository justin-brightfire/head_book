<?php

namespace Subject;
use SplSubject;
use SplObserver;

/**
 * Implementing the built-in subject(publisher) interface SplSubject
 * @see http://php.net/manual/en/class.splsubject.php
 */
class WeatherData implements SplSubject
{
    private float $temperature;
    private float $humidity;
    private float $pressure;

    private array $observers = array();

    /**
     * Attach the Observer.
     *
     * @param SplObserver $observer
     * @return void
     */
    public function attach(SplObserver $observer)
    {
        /**
         * Returning a unique hash for each observer
         */
        $uid = spl_object_hash($observer);
        $this->observers[$uid] = $observer;
    }

    /**
     * Detach the Observer.
     * @param SplObserver $observer
     * @return void
     */
    public function detach(SplObserver $observer)
    {
        $uid = spl_object_hash($observer);
        unset($this->observers[$uid]);
    }

    /**
     * Notify the Observer.
     * @return void
     */
    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    /**
     * Weather Data Setter.
     * @param array $data
     * @return void
     */
    public function setWeatherData(array $data)
    {
        //Setters
        $this->temperature = $data['temperature'];
        $this->humidity = $data['humidity'];
        $this->pressure = $data['pressure'];
        //Updating Observers
        $this->notify();
    }

    /**
     * Weather Data Getter.
     * @return array
     */
    public function getWeatherData(): array
    {
        return array(
            "temperature" => $this->temperature,
            "humidity" => $this->humidity,
            "pressure" => $this->pressure,
        );
    }

}