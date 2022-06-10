<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Bike extends Vehicle implements LightableInterface
{
    public function setCurrentSpeed(int $currentSpeed): void
    {
        $this->currentSpeed = $currentSpeed;
    }

    public function getCurrentSpeed(): int
    { 
        return $this->currentSpeed;
    }

    public function switchOn(): bool
    {
        if ($this->currentSpeed > 10) {
            echo "Bike speed ok ! Lights On ! ";
            return true;
        }
        echo "Not enough speed ! Lights Off ! ";
        return false;
    }

    public function switchOff(): bool
    {
        echo "Bike's Lights Off ! ";
        return false;
    }
}
