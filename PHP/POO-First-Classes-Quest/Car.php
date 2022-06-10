<?php

class SimpsonsCar
{
    private string $name;
    private string $color;
    private int $nbWheels;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel;
    private int $currentSpeed;


    public function __construct(string $name, string $color, int $nbSeats, string $energy)
    {
        $this->name = $name;
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function setNbWheels(int $nbWheels = 4): void
    {
        if ($nbWheels >= 3)
        {
            $this->nbWheels = $nbWheels;
        }
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        if ($energyLevel >= 0)
        {
            $this->energyLevel = $energyLevel;
        }
    }

    public function setCurrentSpeed(int $currentSpeed): void 
    {
        if ($currentSpeed >= 0)
        {
            $this->currentSpeed = $currentSpeed;
        }
    }

    public function getName(): string 
    {
        return 'Car Name : ' . $this->name . '.' . PHP_EOL;
    }

    public function getColor(): string 
    {
        return 'Color : ' . $this->color . '.' . PHP_EOL;
    }

    public function getNbWheels(): int
    {
        return 'Nb of wheels : ' . $this->nbWheels . '.' . PHP_EOL;
    }

    public function getNbSeats(): int
    {
        return 'Nb of Seats : ' . $this->nbSeats . '.' . PHP_EOL;
    }

    public function getEnergy(): string
    {
        return 'Energy : ' . $this->energy . '.' . PHP_EOL;
    }

    public function getEnergyLevel(): int
    {
        return 'Energy level : ' . $this->energyLevel . '%.' . PHP_EOL;
    }

    public function getCurrentSpeed(): int
    {
        return 'Current speed : ' . $this->currentSpeed . ' km/h.' . PHP_EOL;
    }

    public function start(): string
    {
        if ($this->energyLevel > 0)
        {
            return 'Cool ! You have energy ! You\'re rich !! VROOOOM !!' . PHP_EOL;
        } else {
            return 'You don\'t have enough energy... :(' . PHP_EOL;
        }
    }

    public function forward(): string 
    {
        if ($this->energyLevel == 0)
        {
            return 'If you can\'t start, you can\'t drive !' . PHP_EOL;
        } else if ($this->currentSpeed == 0) {
            return 'You already stopped the car !' . PHP_EOL;
        } else {
            return 'You are driving at ' . $this->currentSpeed . ' km/h.' . PHP_EOL;
        }
    }

    public function brake(): string 
    {
        $carSentence = '';
        while ($this->currentSpeed > 0)
        {
            $this->currentSpeed -= 10;
            $carSentence .= 'Break !!! ';
        }
        $carSentence .= ' You\'re stopped !' . PHP_EOL;
        return $carSentence;
    }

    public function dump()
    {
        return var_dump($this);
    }
}