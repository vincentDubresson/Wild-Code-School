<?php

require_once '../src/Speedometer.php';

$km = 10;
$miles = 16;

echo "$km kms = " . Speedometer::convertKmToMiles($km) . ' miles.<br>';
echo "$miles miles = " . Speedometer::convertMilesToKm($miles) . ' kms.<br>';