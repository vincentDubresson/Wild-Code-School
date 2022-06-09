<?php

class Speedometer
{
    const CONVERT = 1.609;

    public static function convertMilesToKm(int $miles): float
    {
        return round($miles * self::CONVERT, 2);
    }

    public static function convertKmToMiles(int $km): float
    {
        return round($km / self::CONVERT, 2);
    }
}