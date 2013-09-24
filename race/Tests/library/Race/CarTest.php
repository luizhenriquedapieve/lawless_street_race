<?php
class CarTest extends PHPUnit_Framework_TestCase
{
    protected $car;

        public function setUp()
	{
            $this->car = new Car();
            $this->car->setEngine(new Engine(105));
	}
        
        public function tearDown()
        {
            $this->car = NULL;
        }
        
        public function testCarConstructor()
	{
            $this->assertTrue($this->car instanceof Car);
	}

        public function testSetEngine()
        {
            $this->assertEquals(new Engine(105), $this->car->setEngine(new Engine(105)));
        }
        
        public function testGetHp()
        {
            $this->assertEquals(105, $this->car->getHp());
        }
        
        public function testGetTopSpeed()
        {
            $this->assertEquals(168, $this->car->getTopSpeed());
        }
        
        /**
        * @dataProvider dataProviderSetModel
        */
        public function testeSetModel($expected, $result)
        {
            $this->assertEquals($expected, $this->car->setModel($result));
        }

        public function dataProviderSetModel()
        {
            return array(
                array('Exotic', 'Exotic'),
                array('Muscle', 'Muscle'),
                array('Classic', 'Classic'),
                array('Simple', 'Simple')
            );
        }

        public function testGetModel()
        {
            $this->car->setModel('Muscle');
            $this->assertEquals('Muscle', $this->car->getModel());
        }

}


	
