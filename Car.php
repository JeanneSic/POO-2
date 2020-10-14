<?php

require_once 'Vehicle.php';
class Car extends vehicle
{

//--construct

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }
}