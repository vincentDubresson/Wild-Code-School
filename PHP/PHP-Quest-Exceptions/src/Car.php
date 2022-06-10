<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{
    private string $energy;
    private int $energyLevel;
    private bool $hasParkBrake;

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    public function __construct(string $color, int $nbSeats, string $energy, int $energyLevel, bool $hasParkBrake)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->energyLevel = $energyLevel;
        $this->hasParkBrake = $hasParkBrake;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        if ($energyLevel >= 0)
        {
            $this->energyLevel = $energyLevel;
        }
    }

    public function getEnergyLevel(): int
    {
        return 'Energy level : ' . $this->energyLevel . '%.' . PHP_EOL;
    }

    public function setEnergy(string $energy): car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergy(): string
    {
        return 'Energy : ' . $this->energy . '.' . PHP_EOL;
    }

    public function setHasParkBrake(bool $hasParkBrake): void
    {
        $hasParkBrake === true ? false : false;
    }

    public function getHasParkBrake(): bool
    {
        return $this->hasParkBrake;
    }


    public function start(): string
    {
        if ($this->energyLevel > 0)
        {
            if ($this->hasParkBrake === true) {
                throw new Exception('You have your park brake !');
            } else {
                return 'Cool ! You have energy and your park brake is off ! You\'re rich !! VROOOOM !!' . PHP_EOL;
            }
        } else {
            return 'You don\'t have enough energy... :(' . PHP_EOL;
        }

        
    }

   


}