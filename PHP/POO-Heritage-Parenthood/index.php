<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

//Bicycles Instantiations

$bartsBike = new SimpsonsBicycle('Red', 1);
$bartsBike->setColor('Red');
$bartsBike->setCurrentSpeed(15);
$bartsBike->setNbWheels(2);

echo $bartsBike->forward();
echo $bartsBike->brake();
echo "\n";
echo $bartsBike->dump();

$maggiesBike = new SimpsonsBicycle('Pink', 1);
$maggiesBike->setColor('Pink');
$maggiesBike->setCurrentSpeed(3);
$maggiesBike->setNbWheels(3);

echo $maggiesBike->forward();
echo $maggiesBike->brake();
echo "\n";
echo $maggiesBike->dump();

//Cars Instantitations

$homersCar = new SimpsonsCar('Yellow', 2, 'fuel');
$homersCar->setNbWheels(4);
$homersCar->setEnergyLevel(100);
$homersCar->setCurrentSpeed(80);

echo $homersCar->start();
echo $homersCar->forward();
echo $homersCar->brake();
echo "\n";
echo $homersCar->dump();

$flandersCar = new SimpsonsCar('Purple', 4, 'Electric');
$flandersCar->setNbWheels(4);
$flandersCar->setEnergyLevel(0);
$flandersCar->setCurrentSpeed(0);

echo $flandersCar->start();
echo $flandersCar->forward();
echo $flandersCar->brake();
echo "\n";
echo $flandersCar->dump();

//Trucks Instantitations

$bigTruck = new Truck('White', 2, 'fuel', 100);
$bigTruck->setEnergyLevel(100);
$bigTruck->setCurrentSpeed(90);
$bigTruck->setNbWheels(10);
echo $bigTruck->forward();
echo $bigTruck->brake();
echo $bigTruck->fillingTruck(80);
echo $bigTruck->fillingTruck(50);
echo $bigTruck->dump();
