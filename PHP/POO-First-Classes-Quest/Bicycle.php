<?php

class SimpsonsBicycle
{
    private string $name;
    private string $color;
    private int $currentSpeed;
    private int $nbSeats = 1;
    private int $nbWheels;

    public function __construct(string $name = 'No name', int $nbWheels = 2)
    {
        $this->name = $name;
        $this->nbWheels = $nbWheels;
    }

    public function getName(): string 
    {
        return 'Bicycle Name : ' . $this->name . '.' . PHP_EOL;
    }

    public function getColor(): string
    {
        return 'Color : ' . $this->color . '.' . PHP_EOL;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getCurrentSpeed(): int
    {
        return 'Current speed : ' . $this->currentSpeed . ' km/h.' . PHP_EOL;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        if ($currentSpeed >= 0)
        {
            $this->currentSpeed = $currentSpeed;
        }
    }

    public function forward(): string
    {
        if ($this->currentSpeed > 0)
            return 'Go !' . PHP_EOL;
    }

    public function brake(): string
    {
        $bicycleSentence = '';
        while ($this->currentSpeed > 0)
        {
            $this->currentSpeed--;
            $bicycleSentence .= 'Break !!! ';
        }
        $bicycleSentence .= ' You\'re stopped !' . PHP_EOL;
        return $bicycleSentence;
    }

    public function dump()
    {
        return var_dump($this);
    }
}