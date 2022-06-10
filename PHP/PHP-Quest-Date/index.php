<?php

$presentTime = new DateTime();

$destinationTime = new DateTime();
$destinationTime->setTimestamp('1997370651');

echo 'Destination Time : ' . $destinationTime->format('M d Y - A g:i') . '<br><br>';
echo 'Actual Time : ' . $presentTime->format('M d Y - A g:i') . '<br><br>';

$interval = $presentTime->diff($destinationTime);
echo $interval->format('%y années %m mois %d jours %h heures et %i minutes de décallage.') . '<br><br>';

$yearsInMin = $interval->format("%y") * 525600; 
$monthInMin = $interval->format("%m") * 1440 * 31; 
$daysinMin = $interval->format("%d") * 1440; 
$hoursInMin = $interval->format("%h") * 60;
$Min = $interval->format("%i");

$intervalMinutes = $yearsInMin + $monthInMin + $daysinMin + $hoursInMin + $Min;
echo ($intervalMinutes) . 'mn.<br>';

$nbOfLitres = 0;
while ($intervalMinutes > 0)
{
    $nbOfLitres++;
    $intervalMinutes -= 10000;
}

echo 'il faudra ' . $nbOfLitres . ' litres de carburant.';


