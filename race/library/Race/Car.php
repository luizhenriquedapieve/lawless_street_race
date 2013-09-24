<?php
class Car
{
    protected $kmPerHourPerHp = 1.6;
    protected $engine;
    protected $model;
        
	public function setEngine(CarEngine $engine)
	{
            $this->engine = $engine;
            return $this->engine;
	}
	
	public function getHp()
	{   
            //Function for interface
            return $this->engine->getHp();
	}
	
	public function getTopSpeed()
	{
            return $this->engine->getHp() * $this->kmPerHourPerHp;
	}
        
        public function setModel($modelCar)
        {
            $this->model = $modelCar;
            return $this->model;
        }
        
        public function getModel()
        {
            return $this->model;
        }
}
