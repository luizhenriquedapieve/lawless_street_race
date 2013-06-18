<?php
class RaceTest extends PHPUnit_Framework_TestCase
{
	protected $race;
	protected $carA;
	protected $carB;
	protected $racerA;
	protected $racerB;
	
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
		$this->assertEquals(162.0, $this->race->getMeter(45));
	}
	
	/*public function testStartRace()
	{	
			$street = new Street(600);
			
            $this->assertEquals($this->racerB->getName(), $this->race->startRace($this->carA->getHp(),$this->carB->getHp(),$street->getDistance()));
	}*/
	
        
}
