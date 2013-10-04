<?php
class RaceTest extends PHPUnit_Framework_TestCase
{
	protected $race;
	protected $carA;
	protected $carB;
	protected $racerA;
	protected $racerB;
  
        protected $street;


        public function setUp()
	{
            $this->race = new Race();
            
            $this->carA = new Car();
            $this->carA->setEngine(new Engine(105), 'Simple');
            $this->racerA = new Racer('Luiz', $this->carA);
            
            $this->carB = new Car();
            $this->carB->setEngine(new Engine(230), 'Muscle');
            $this->racerB = new Racer('Vin Diesel', $this->carB);
            
        }
        
        public function testRaceConstructor()
	{
            $this->assertTrue($this->race instanceof Race);
	}
	
	public function testSetRacers()
	{	
            $this->race->setRacers($this->racerA, $this->racerB);	
            $this->assertCount(2, $this->race->getRacers());
	}
	
	public function testGetPower()
	{
            $this->assertEquals(10.5, $this->race->getPower(105));
	}
	
	public function testGetMeter()
	{
            $this->assertEquals(162.0, $this->race->getMeter(45, 20));
            $this->assertEquals(80.0, $this->race->getMeter(20, 50));
	}
	
        public function testTrack()
        {
            $this->race->addTrack(new Street(1000));
            $this->assertInstanceOf('Street',$this->race->getTrack());
        }

        /**
        * @dataProvider dataProviderGetSpeedCurrent
        */
        public function testGetSpeedCurrent($expected,$power,$time,$topSpeedCar)
        {
            $this->assertEquals($expected, $this->race->getSpeedCurrent($power, $time, $topSpeedCar));
        }
        
        public function dataProviderGetSpeedCurrent() {
        return array(
            array(60, 20, 3, 80),
            array(100, 50, 3, 100),
            array(80, 50, 2, 80),
            array(90, 45, 2, 100)
        );
    }

	public function testStartRace()
	{	
                
	}
	
        
}
