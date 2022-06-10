<?php

require_once 'Bicycle.php';
require_once 'Car.php';

//Bicycles Instantiations

$bartsBike = new SimpsonsBicycle('Tornado');
$bartsBike->setColor('Red');
$bartsBike->setCurrentSpeed(15);

echo $bartsBike->getName();
echo $bartsBike->forward();
echo $bartsBike->brake();
echo "\n";


$maggiesBike = new SimpsonsBicycle('Little Cutie Bike', 3);
$maggiesBike->setColor('Pink');
$maggiesBike->setCurrentSpeed(3);

echo $maggiesBike->getName();
echo $maggiesBike->forward();
echo $maggiesBike->brake();
echo "\n";


//Cars Instantitations

$homersCar = new SimpsonsCar('Teenage Homer\' Car', 'Yellow', 2, 'Hydrogen');
$homersCar->setNbWheels(4);
$homersCar->setEnergyLevel(100);
$homersCar->setCurrentSpeed(80);

echo $homersCar->getName();
echo $homersCar->start();
echo $homersCar->forward();
echo $homersCar->brake();
echo "\n";


$flandersCar = new SimpsonsCar('Flander\'s Geo', 'Purple', 4, 'Electric');
$flandersCar->setNbWheels(4);
$flandersCar->setEnergyLevel(0);
$flandersCar->setCurrentSpeed(0);

echo $flandersCar->getName();
echo $flandersCar->start();
echo $flandersCar->forward();
echo $flandersCar->brake();
echo "\n";
