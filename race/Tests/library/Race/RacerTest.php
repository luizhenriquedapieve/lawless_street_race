<?php
class RacerTest extends PHPUnit_Framework_TestCase
{
	protected $racer;
	protected $car;
	
	public function setUp()
	{
            $this->car = new Car();
            $this->car->setEngine(new Engine(105), 'Muscle');
            $this->racer = new Racer('NOME', $this->car);
	}
	
        public function tearDown()
        {
            $this->racer = NULL;
        }
        
	public function testRacerConstructor()
	{
		$this->assertTrue($this->racer instanceof Racer);
	}
	
        public function testGetName()
	{
            $this->assertEquals('NOME', $this->racer->getName());
	}
        
        public function testGetModelCar()
        {
             $this->assertEquals('Muscle', $this->racer->getModelCar());
        }
        
}
