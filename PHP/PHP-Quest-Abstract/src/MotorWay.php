<?php

require_once('HighWay.php');

final class MotorWay extends HighWay
{
    protected array $currentVehicles = [];
    protected int $nbLane = 4;
    protected int $maxSpeed = 130;

    public function addVehicle($vehicle): void
    {
        if ((!($vehicle instanceof Bike)) && (!($vehicle instanceof Skateboard)))
            $this->currentVehicles[] = $vehicle;
    }
}