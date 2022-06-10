<?php

require_once('../src/Vehicle.php');
require_once('../src/Bike.php');
require_once('../src/Car.php');

$car = new Car('Black', 4, 'fuel');
$bike = new Bike('Red', 2);

echo $car->switchOn() . "<br>";
echo $car->switchOff() . "<br><br>";

$bike->setCurrentSpeed(5);
echo "Bike's speed : " . $bike->getCurrentSpeed() . " km/h.<br>";
echo $bike->switchOn() . "<br><br>";

$bike->setCurrentSpeed(15);
echo "Bike's speed : " . $bike->getCurrentSpeed() . " km/h.<br>";
echo $bike->switchOn() . "<br>";
echo $bike->switchOff();


