<?php
class CarTest extends PHPUnit_Framework_TestCase
{
    protected $car;
    protected $engine;

        public function setUp()
	{
            $this->car = new Car();
            $this->engine = new Engine(105);
            $this->car->setEngine($this->engine, 'Muscle');
	}
        
        public function testCarConstructor()
	{
            $this->assertTrue($this->car instanceof Car);
	}

        public function testSetEngine()
        {
            $this->assertEquals($this->engine, $this->car->setEngine($this->engine, 'Muscle'));
        }
        
        public function testGetHp()
        {
            $this->assertEquals(105, $this->car->getHp());
        }
        
        public function testGetTopSpeed()
        {
            $this->assertEquals((105*1.6), $this->car->getTopSpeed());
        }
        
        public function testGetModel()
        {
             $this->assertEquals('Muscle', $this->car->getModel());
        }

}


	
