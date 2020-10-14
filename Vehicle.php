<?php

class Vehicle
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    /**
     * @var string
     */
    protected $color;

    /**
     * @var integer
     */
    protected $currentSpeed;
    /**
     * @var integer
     */
    protected $nbSeats;
    /**
     * @var integer
     */
    protected $nbWheels;

    /**
     * @var integer
     */
    protected $energyLevel;

    /** @var string
     *
     */
    protected $energy;

//CONSTRUCTEUR
    public function __construct(string $color, int $nbSeats)
    {
        $this->setColor($color);
        $this->setNbSeats($nbSeats);
    }

    //GET-SET
    public function getColor()
    {
        return $this->color;
    }
    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getcurrentSpeed()
    {
        return $this->currentSpeed;
    }
    public function setCurrentSpeed($currentSpeed)
    {
        $this->currentSpeed=$currentSpeed;
    }

    public function getNbSeats()
    {
        return $this->nbSeats;
    }
    public function setNbSeats($nbSeats)
    {
        $this->nbSeats = $nbSeats;
    }

    public function getnbWheels()
    {
        return $this->nbWheels;
    }
    public function setNbWheels($nbWheels)
    {
        $this->nbWheels = $nbWheels;
    }
    /**
     * @return string
     */
    public function getEnergy()
    {
        return $this->energy;
    }

    public function setEnergy($energy)
    {
        if(in_array($energy, self::ALLOWED_ENERGIES)){
            $this->energy = $energy;
        }
        return $this;
    }
    /**
     * @return int
     */
    public function getEnergyLevel()
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel($energyLevel)
    {
        $this->energyLevel = $energyLevel;
    }




    public function start()
    {
        $sentence = "";
        if($this->energyLevel>0) {
            $this->energyLevel--;
            $this->currentSpeed = 0;
            $sentence .= "La voiture démarre";
        } else {
            $sentence.= "Plus d'énergie ...";
        }
        return $sentence;
    }
    public function forward()
    {
        $sentence = "";
        if ($this->energyLevel > 0){
            $this->energyLevel--;
            $this->currentSpeed = 100;
            $sentence.="La voiture avance vite !!!";
        } else {
            $sentence.="Plus d'énergie ...";
            $this->currentSpeed=0;
        }
        return $sentence;
    }

    public function brake()
    {
        $sentence = "";
        while($this->currentSpeed>0){
            $this->currentSpeed -= 10;
            $sentence .= "BRAKE !!";
        }
        $sentence .= "La voiture est arrêtée.";
        return $sentence;
    }
}