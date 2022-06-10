<?php

require_once('../src/Vehicle.php');
require_once('../src/Car.php');


$firstCar = new Car('Black', 4, 'fuel', 100, false);

try {
    echo $firstCar->start();
} catch(Exception $e){
    echo 'WARNING !!!  : ' . $e->getMessage() . PHP_EOL;
} finally {
    $firstCar->setHasParkBrake($firstCar->getHasParkBrake());
    echo "Ma voiture roule comme un donut !" . PHP_EOL;
}

$secondCar = new Car('Red', 4, 'electric', 50, true);


try {
    echo $secondCar->start();
} catch(Exception $e){
    echo 'WARNING !!!  : ' . $e->getMessage() . PHP_EOL;
} finally {
    $secondCar->setHasParkBrake($secondCar->getHasParkBrake());
    echo "Ma voiture roule comme un donut !" . PHP_EOL;
}

