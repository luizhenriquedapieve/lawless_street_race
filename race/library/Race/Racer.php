<?php
class Racer
{
    protected $name;
    protected $car;
    
    public function __construct($name, Car $car)
    {
            $this->name = $name;
            $this->car = $car;
    }

    public function getName()
    {
            return $this->name;
    }
    
    public function getModelCar()
    {
            return $this->car->getModel();
    }
    
    public function getCar()
    {
            return $this->car;
    }
}
