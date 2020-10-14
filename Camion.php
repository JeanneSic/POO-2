<?php

require_once "Vehicle.php";
class Camion extends Vehicle
{
    /** stockage capacity
     * @var int
     */
    private $stockage;

    /** chargement level
     * @var int
     */
    private $chargementLevel = 10;


    public function __construct(string $color, int $nbSeats, string $energy, int $stockage)
    {
        parent::__construct($color,$nbSeats);
        $this->setEnergy($energy);
        $this->setStockage($stockage);
    }

    /**
     * @return int
     */
    public function getStockage(){
        return $this->stockage;
    }
    public function setStockage($stockage){
        $this->stockage = $stockage;
    }
    /**
     * @return int
     */
    public function getChargementLevel(){
        return $this->$chargementLevel;
    }
    public function setChargementLevel($chargementLevel){
        $this->chargementLevel = $chargementLevel;
    }


    public function isFull()
    {
            if($this->chargementLevel < 15){
                return "in filling";
            }else {
                return "full";
            }
    }
}