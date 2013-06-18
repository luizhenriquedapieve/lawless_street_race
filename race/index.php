<?php
include_once 'bootstrap.php';

$carRacer1 = new Car();
$carRacer1->setEngine(new Engine(105), 'Saveiro 1.6');
$racer1 = new Racer('Luiz', $carRacer1);

$carRacer2 = new Car();
$carRacer2->setEngine(new Engine(230), 'Maverick');
$racer2 = new Racer('Vin Diesel', $carRacer2);

$race = new Race();
$race->setRacers($racer1, $racer2);

$quantityRacers = count($race->getRacers());

$street = new Street(1000);

echo "==================================================================================================================== \n";
echo "| A disputa é entre ".$quantityRacers . " corredores. Em uma pista de ".$street->getDistance()." m.  \n";
echo "| O corredor ".$racer1->getName()." está com um(a) ". $carRacer1->getModel()." que tem de final ".$carRacer1->getTopSpeed(). "km/h. \n";
echo "| O corredor ".$racer2->getName()." está com um(a) ". $carRacer2->getModel()." que tem de final ".$carRacer2->getTopSpeed(). "km/h. \n";
echo "==================================================================================================================== \n";

$race->startRace($carRacer1->getHp(), $carRacer2->getHp(), $street->getDistance());