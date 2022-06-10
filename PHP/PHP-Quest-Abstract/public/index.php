<?php

require_once('../src/Vehicle.php');
require_once('../src/Skateboard.php');
require_once('../src/Bike.php');
require_once('../src/Car.php');
require_once('../src/HighWay.php');
require_once('../src/MotorWay.php');
require_once('../src/PedestrianWay.php');
require_once('../src/ResidentialWay.php');

$firstSkateboard = new Skateboard('White', 0);
$secondSkateboard = new Skateboard('Pink', 0);


$firstBike = new Bike('Red', 2);
$secondBike = new Bike('Yellow', 2);


$firstCar = new Car('Black', 4, 'fuel');
$secondCar = new Car('Blue', 4, 'electric');

$periphNord = new MotorWay();
$grandeRue = new ResidentialWay();
$parcTeteDOr = new PedestrianWay();

$periphNord->addvehicle($firstBike);
$periphNord->addVehicle($firstSkateboard);
$periphNord->addVehicle($firstCar);
$periphNord->addVehicle($secondCar);
$periphNord->dump();

$grandeRue->addvehicle($firstBike);
$grandeRue->addVehicle($firstSkateboard);
$grandeRue->addVehicle($firstCar);
$grandeRue->addVehicle($secondCar);
$grandeRue->dump();

$parcTeteDOr->addvehicle($firstBike);
$parcTeteDOr->addVehicle($firstSkateboard);
$parcTeteDOr->addVehicle($firstCar);
$parcTeteDOr->addVehicle($secondBike);
$parcTeteDOr->dump();