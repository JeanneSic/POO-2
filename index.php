<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Vehicle.php';

$bike = new Bicycle("Blue", 1);
$bike->setNbWheels(2);

echo $bike->forward();
echo '<br> Vitess du vélo: ' . $bike->getcurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo: ' . $bike->getcurrentSpeed() . 'km/h' . '<br>';
echo $bike->brake();

var_dump($bike);
var_dump(Car::ALLOWED_ENERGIES);

$polo = new Car('grey', 5, "fuel");
$polo->setEnergyLevel(100);
$polo->setCurrentSpeed(0);

var_dump($polo);
echo $polo->start();
echo '<br> Le niveau d\'énergie de la voiture est de:' . $polo->getEnergyLevel() . 'litres' . '<br>';
echo '<br> La vitesse de la voiture est de : ' . $polo->getCurrentSpeed() . ' km/h' . '<br>';
echo $polo->forward();
echo '<br> Le niveau d\'énergie de la voiture est de:' . $polo->getEnergyLevel() . 'litres' . '<br>';
echo '<br> La vitesse de la voiture est de : ' . $polo->getCurrentSpeed() . ' km/h' . '<br>';
echo $polo->brake();
echo '<br> La vitesse de la voiture est de : ' . $polo->getCurrentSpeed() . ' km/h' . '<br>';


$camion = new Truck('white', 3, "fuel", 15);
var_dump($camion);

$camion->setEnergyLevel(100);
echo $camion->start();
echo "<br>" . $camion->isFull();