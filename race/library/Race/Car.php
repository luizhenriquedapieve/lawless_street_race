<?php
class Car
{
    protected $kmPerHourPerHp = 1.6;
    protected $engine;
    protected $model;
        
	public function setEngine(CarEngine $engine, $modelCar)
	{
		$this->engine = $engine;
                $this->model = $modelCar;
                return $this->engine;
	}
	
	public function getHp()
	{
		return $this->engine->getHp();
	}
	
	public function getTopSpeed()
	{
		return $this->engine->getHp() * $this->kmPerHourPerHp;
	}
        
        public function getModel()
        {
            return $this->model;
        }
}
