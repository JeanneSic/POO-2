<?php
require_once 'Vehicle.php';
class Bicycle extends Vehicle
{
    //GET/SET

//MES FONCTIONS MOUVEMENT
    public function forward()
    {
        $this->currentSpeed=15;
        return"Go!";
    }

    public function brake()
    {
        $sentence = "";
        while ($this->currentSpeed>0){
            $this->currentSpeed--;
            $sentence.="Brake!!!!";
        }
        $sentence.= "I'm stopped !";
        return $sentence;
    }


}


