<?php

use Observers\Displays\CurrentConditionDisplay;
use Observers\Displays\ForecastDisplay;
use Observers\Displays\HeatIndexDisplay;
use Observers\Displays\StatisticsDisplay;
use Subject\WeatherData;

require_once './vendor/autoload.php';

echo "Hello Observer";

$weatherData = new WeatherData();

$currentDisplay = new CurrentConditionDisplay($weatherData);
$statsDisplay = new StatisticsDisplay($weatherData);
$forecast = new ForecastDisplay($weatherData);
$heatIndex = new HeatIndexDisplay($weatherData);

$data = array(
    "temperature" => 80,
    "humidity" => 65,
    "pressure" => 30.5,
);

$weatherData->setWeatherData($data);