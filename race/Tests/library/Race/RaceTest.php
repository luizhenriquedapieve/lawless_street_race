<?php
class RaceTest extends PHPUnit_Framework_TestCase
{
	protected $race;
	protected $carA;
	protected $carB;
	protected $racerA;
	protected $racerB;
<<<<<<< HEAD
	protected $mock;
=======

>>>>>>> 4e3e03ac42ddab93a243ec13ca32f2bb3ba3e82d
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

	public function testGetDistance()
	{
            $this->assertEquals(20.0, $this->race->getDistance(45, 20));
            $this->assertEquals(12.0, $this->race->getDistance(20, 50));
	}

        public function testTrack()
        {
            $this->race->addTrack(new Street(1000));
            $this->assertInstanceOf('Street',$this->race->getTrack());
        }

        /**
        * @dataProvider dataProviderGetCurrentSpeed
        */
        public function testGetCurrentSpeed($expected, $time, $car)
        {
            $this->assertEquals($expected, $this->race->getCurrentSpeed($time, $car));
        }

        public function dataProviderGetCurrentSpeed() {

        	$car1 = new Car();
        	$car1->setEngine(new Engine(200));

        	$car2 = new Car();
        	$car2->setEngine(new Engine(500));

        	return array(
        			array(60, 3, $car1),
        			array(100, 2, $car2),
        			array(150, 3, $car2),
        			array(800, 41, $car2)
        	);

<<<<<<< HEAD
=======
//         return array(
//             array(60, 20, 3, 80),
//             array(100, 50, 3, 100),
//             array(80, 50, 2, 80),
//             array(90, 45, 2, 100)
//         );
>>>>>>> 4e3e03ac42ddab93a243ec13ca32f2bb3ba3e82d
        }

        /**
        * @dataProvider dataProviderGetLastMeter
        */
        public function testGetLastMeter($expected, $lastMeter, $meterCurrentCar )
        {
            $this->assertEquals($expected, $this->race->getLastMeter($lastMeter, $meterCurrentCar));
        }

        public function dataProviderGetLastMeter() {
        return array(
            array(20, 15, 5),
            array(30, 10, 20),
            array(50, 25, 25),
            array(45, 22.5, 22.5)
        );
        }
<<<<<<< HEAD
        
=======
>>>>>>> 4e3e03ac42ddab93a243ec13ca32f2bb3ba3e82d
        public function testGetResultPerSecond()
        {
            
            $msgReturn1 = 'Carro A está com velocidade de  0 km/h e percorreu 200m 
Carro B está com velocidade de  km/h e percorreu 100m 
';
            $this->assertEquals( $msgReturn1 , $this->race->getResultPerSecond(200, 100, 0, 3));
            
            $msgReturn2 = 'Carro A está com velocidade de  km/h e percorreu 200m 
Carro B está com velocidade de  km/h e percorreu 100m 
';
            $this->assertEquals( $msgReturn2 , $this->race->getResultPerSecond(200, 100, 3, 3));
            
            $msgReturn3 = 'Carro A está com velocidade de  km/h e percorreu 150m 
Carro B está com velocidade de 0 km/h e percorreu 200m 
';
            $this->assertEquals( $msgReturn3 , $this->race->getResultPerSecond(150, 200, 10, 0));
            
            $msgReturn4 = 'Carro A está com velocidade de  km/h e percorreu 150m 
Carro B está com velocidade de  km/h e percorreu 200m 
';
            $this->assertEquals( $msgReturn4 , $this->race->getResultPerSecond(150, 200, 10, 1));
<<<<<<< HEAD
=======
            
//            $this->assertStringMatchesFormat('%A', $this->race->getResultPerSecond(200, 100, 400));
//            $this->assertStringMatchesFormat('%A', $this->race->getResultPerSecond(150, 200, 400));
//            
//            $this->assertStringMatchesFormat('%A', $this->race->getResultPerSecond(200, 100, 400, 10, 3));
//            $this->assertStringMatchesFormat('%A', $this->race->getResultPerSecond(150, 200, 400, 4, 5));
>>>>>>> 4e3e03ac42ddab93a243ec13ca32f2bb3ba3e82d
        }
        
        public function testVerifyWinner()
        {
            $this->assertEquals("Vencedor da corrida é o carro A\n",  $this->race->verifyWinner(150,80,100));
            $this->assertEquals("Vencedor da corrida é o carro B\n",  $this->race->verifyWinner(50,100,100));
            $this->assertNull($this->race->verifyWinner(50,80,100));
        }
<<<<<<< HEAD

        public function testTryOnesLuck()
        {
            $this->assertEquals("O oleo afetou o carro A \n", $this->race->tryOnesLuck(0));
            $this->assertEquals("O oleo afetou o carro B \n", $this->race->tryOnesLuck(1));
            $this->assertEquals("Carro A acionou o Turbo\n", $this->race->tryOnesLuck(4));
            $this->assertEquals("Carro B acionou o Turbo\n", $this->race->tryOnesLuck(5));
        }

        public function testStartRace()
	{
            $carRacer1 = new Car();
            $carRacer2 = new Car();
            
            $carRacer1->setEngine(new Engine(105));
			$carRacer2->setEngine(new Engine(230));
            
            $racer1 = new Racer('Luiz', $carRacer1);
            $racer2 = new Racer('Vin Diesel', $carRacer2);
            
            $expected = 'Vencedor da corrida é o carro B
';
            $this->assertEquals($expected, $this->race->startRace($racer1, $racer2, 1000));
            
            
            $carRacer1->setEngine(new Engine(205));
		    $carRacer2->setEngine(new Engine(130));

            $racer1 = new Racer('Teste 1', $carRacer1);
=======

        public function testTryOnesLuck()
        {
            $this->assertEquals("O oleo afetou o carro A \n", $this->race->tryOnesLuck(0));
            $this->assertEquals("O oleo afetou o carro B \n", $this->race->tryOnesLuck(1));
            $this->assertEquals("Carro A acionou o Turbo\n", $this->race->tryOnesLuck(4));
            $this->assertEquals("Carro B acionou o Turbo\n", $this->race->tryOnesLuck(5));
        }

        public function testStartRace()
	{
            $carRacer1 = new Car();
            $carRacer1->setEngine(new Engine(105));

            $racer1 = new Racer('Luiz', $carRacer1);

            $carRacer2 = new Car();
            $carRacer2->setEngine(new Engine(230));

            $racer2 = new Racer('Vin Diesel', $carRacer2);
            
            $street = new Street(1000);
            
            $expected = 'Vencedor da corrida é o carro B
';
            $this->assertEquals($expected, $this->race->startRace($racer1, $racer2, $street->getDistance()));
            
            $carRacer1->setEngine(new Engine(205));

            $racer1 = new Racer('Teste 1', $carRacer1);

            $carRacer2->setEngine(new Engine(130));

>>>>>>> 4e3e03ac42ddab93a243ec13ca32f2bb3ba3e82d
            $racer2 = new Racer('Teste 2', $carRacer2);

            $expected = 'Vencedor da corrida é o carro A
';
<<<<<<< HEAD
            $this->assertEquals($expected, $this->race->startRace($racer1, $racer2, 1000));
            
	}
/*
        public function testMockStartRace()
	{
            $carRacer1 = new Car();
            $carRacer1->setEngine(new Engine(105));

            $racer1 = new Racer('Luiz', $carRacer1);

            $carRacer2 = new Car();
            $carRacer2->setEngine(new Engine(230));

            $racer2 = new Racer('Vin Diesel', $carRacer2);
            
            $street = new Street(1000);
            
            $expected = 'Vencedor da corrida é o carro B
';

			$this->mock = $this->getMock('Race', array('startRace'));

			$this->mock->expects($this->at(0))
                    ->method('startRace')
                    ->with($racer1, $racer2, $street->getDistance())
                    ->will($this->returnValue($expected));

            
            $this->assertEquals($expected, $this->mock->startRace($racer1, $racer2, $street->getDistance()));
            
            
            $carRacer1->setEngine(new Engine(205));

            $racer1 = new Racer('Teste 1', $carRacer1);

            $carRacer2->setEngine(new Engine(130));

            $racer2 = new Racer('Teste 2', $carRacer2);

            $expected = 'Vencedor da corrida é o carro A
';
            
            $this->mock = $this->getMock('Race', array('startRace'));

			$this->mock->expects($this->at(0))
                    ->method('startRace')
                    ->with($racer1, $racer2, $street->getDistance())
                    ->will($this->returnValue($expected));

            
            $this->assertEquals($expected, $this->mock->startRace($racer1, $racer2, $street->getDistance()));
            
	}*/

=======
            $this->assertEquals($expected, $this->race->startRace($racer1, $racer2, $street->getDistance()));
            
	}
>>>>>>> 4e3e03ac42ddab93a243ec13ca32f2bb3ba3e82d


}
