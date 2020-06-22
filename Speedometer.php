<?php


class Speedometer
{
    const OPERATOR = 1.609344;

    public static function kilometersToMiles(float $kilometers) : float
    {
        return (round($kilometers / self::OPERATOR, 2));
    }

    public static function milesToKilometers(float $miles) : float
    {
        return (round($miles * self::OPERATOR, 2));
    }
}