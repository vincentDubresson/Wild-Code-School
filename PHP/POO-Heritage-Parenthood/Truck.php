<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    private string $energy;
    private int $energyLevel;
    private int $storageCapacity;
    private int $loading = 0;

    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->storageCapacity = $storageCapacity;
    }

    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergy() 
    {
        return $this->energy;
    }

    public function setEnergyLevel(int $energyLevel): void 
    {
        $this->energyLevel = $energyLevel;
    }

    public function getEnergyLevel(): int 
    {
        return $this->energyLevel;
    }

    public function getStorageCapacity($storageCapacity): void 
    {
        $this->storageCapacity = $storageCapacity;
    }

    public function setStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    public function getLoading($loading): void 
    {
        $this->loading = $loading;
    }

    public function setLoading(): int
    {
        return $this->loading;
    }

    public function fillingTruck($loading): string 
    {
        $capacityTruck = $this->storageCapacity;
        if ($loading <= $capacityTruck)
        {
            $capacityTruck -= $loading;
            $this->storageCapacity = $capacityTruck;
            return 'In filling...' . PHP_EOL . 'There remains a capacity of : ' . $capacityTruck . '.' . PHP_EOL;
        } else {
            return 'Sorry, the truck is full !';
        }
    }
}