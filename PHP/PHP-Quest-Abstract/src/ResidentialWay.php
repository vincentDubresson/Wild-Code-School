<?php

require_once('HighWay.php');

final class ResidentialWay extends HighWay
{
    protected array $currentVehicles = [];
    protected int $nbLane = 2;
    protected int $maxSpeed = 50;

    public function addVehicle($vehicle): void
    {
            $this->currentVehicles[] = $vehicle;
    }
}