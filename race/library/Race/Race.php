<?php
class Race
{
	protected $speedCurrentCarA;
	protected $speedCurrentCarB;

        protected $racers = array();
        protected $track;


        public function setRacers(Racer $racerA, Racer $racerB)
	{
		$this->racers = array(
			'racerA'	=> $racerA,
			'racerB'	=> $racerB
		);

		return $this;
	}

        public function getRacers()
	{
		return $this->racers;
	}

        public function getDistance($speed, $topSpeed)
        {
            if ($speed <= $topSpeed)
            {
                $meter = $speed * 0.6;
                return $meter;
            }

            return $topSpeed;
        }

        public function getCurrentSpeed($time, Car $car)
        {
			$currentSpeed = ($car->getHp() * 0.1) * $time;

			if ($currentSpeed <= $car->getTopSpeed())
			{
				return $currentSpeed;
			}

			return $car->getTopSpeed();
        }

        public function addTrack($track)
        {
            $this->track = $track;
        }

        public function getTrack()
        {
            return $this->track;
        }

        public function getResultPerSecond($lastMeterA, $lastMeterB, $speedCurrentCarA, $speedCurrentCarB)
        {
                $msg = "";
                
            if ($lastMeterA > $lastMeterB)
            {
                if ($speedCurrentCarA == 0)
                {
<<<<<<< HEAD
=======
                    //printf($currentSpeedMsg, 'A', 0, $lastMeterA);
>>>>>>> 4e3e03ac42ddab93a243ec13ca32f2bb3ba3e82d
                    $msg .= "Carro A está com velocidade de  0 km/h e percorreu ".$lastMeterA."m \n";
                }
                else
                {
<<<<<<< HEAD
                	$msg .= "Carro A está com velocidade de ".$this->speedCurrentCarA." km/h e percorreu ".$lastMeterA."m \n";
                }

=======
                	//printf($currentSpeedMsg, 'A', $this->speedCurrentCarA, $lastMeterA);
                    $msg .= "Carro A está com velocidade de ".$this->speedCurrentCarA." km/h e percorreu ".$lastMeterA."m \n";
                }

                //printf($currentSpeedMsg, 'B', $this->speedCurrentCarB, $lastMeterB);
>>>>>>> 4e3e03ac42ddab93a243ec13ca32f2bb3ba3e82d
                $msg .= "Carro B está com velocidade de ".$this->speedCurrentCarB." km/h e percorreu ".$lastMeterB."m \n";

            }else{

<<<<<<< HEAD
=======
                //printf($currentSpeedMsg, 'A', $this->speedCurrentCarA, $lastMeterA);
>>>>>>> 4e3e03ac42ddab93a243ec13ca32f2bb3ba3e82d
                $msg .= "Carro A está com velocidade de ".$this->speedCurrentCarA." km/h e percorreu ".$lastMeterA."m \n";

                if ($speedCurrentCarB == 0)
                {
<<<<<<< HEAD
=======
                	//printf($currentSpeedMsg, 'B', 0, $lastMeterB);
>>>>>>> 4e3e03ac42ddab93a243ec13ca32f2bb3ba3e82d
                    $msg .= "Carro B está com velocidade de 0 km/h e percorreu ".$lastMeterB."m \n";
                }
                else
                {
<<<<<<< HEAD
=======
                    //printf($currentSpeedMsg, 'B', $this->speedCurrentCarB, $lastMeterB);
>>>>>>> 4e3e03ac42ddab93a243ec13ca32f2bb3ba3e82d
                    $msg .= "Carro B está com velocidade de ".$this->speedCurrentCarB." km/h e percorreu ".$lastMeterB."m \n";
                }
            }
            
            return $msg;
        }

        public function getLastMeter($lastMeter, $meterCurrentCar)
        {
            $lastMeter = $lastMeter + $meterCurrentCar;
            return $lastMeter;
        }

        public function tryOnesLuck($random)
        {
        	$oil = new Problems_Oil();
        	$oil->setQuantity(1000);
        	$damageOil = $oil->getDamage();
<<<<<<< HEAD

        	$turbo = new Acessories_Turbo();
        	$turboSet = $turbo->useIt();
        	$turboName = $turbo->getName();

=======

        	$turbo = new Acessories_Turbo();
        	$turboSet = $turbo->useIt();
        	$turboName = $turbo->getName();

        	//$random = rand(0, 10);
>>>>>>> 4e3e03ac42ddab93a243ec13ca32f2bb3ba3e82d
                $msg = "";
        	switch ($random){

        		case 0:
        			$msg .= "O oleo afetou o carro A \n";
        			$this->speedCurrentCarA = $this->speedCurrentCarA - ($damageOil * 20);
        			break;
        		case 1:
        			$msg .= "O oleo afetou o carro B \n";
        			$this->speedCurrentCarB = $this->speedCurrentCarB - ($damageOil * 20);
        			break;
        		case 4:
        			$msg .= "Carro A acionou o ".$turboName."\n";
        			$this->speedCurrentCarA = $this->speedCurrentCarA + $turboSet;
        			break;
        		case 5:
        			$msg .= "Carro B acionou o ".$turboName."\n";
        			$this->speedCurrentCarB = $this->speedCurrentCarB + $turboSet;
        			break;
        	}
                
                return $msg;
        }
        
        public function verifyWinner($lastMeterA,$lastMeterB,$distanceStreet)
        {
            if ($lastMeterA >= $distanceStreet)
            {
                return "Vencedor da corrida é o carro A\n";
            }
            
            if ($lastMeterB >= $distanceStreet)
            {
                return "Vencedor da corrida é o carro B\n";
            }
            
            return NULL;
           
        }

        public function startRace($racerA, $racerB, $distanceStreet)
        {
<<<<<<< HEAD
=======
//            $carA = $this->racers['racerA']->getCar();
//            $carB = $this->racers['racerB']->getCar();

//            $distanceStreet = $this->getTrack()->getDistance();

>>>>>>> 4e3e03ac42ddab93a243ec13ca32f2bb3ba3e82d
            $carA = $racerA->getCar();
            $carB = $racerB->getCar();
            
            $lastMeterA = 0;
            $lastMeterB = 0;

            for($time = 1; $time <= 60; $time++)
            {
                    $this->speedCurrentCarA = $this->getCurrentSpeed($time, $carA);
                    $this->speedCurrentCarB = $this->getCurrentSpeed($time, $carB);

                    echo "******************************** \n";
                    echo "Ao(s) {$time}s de corrida: \n";

<<<<<<< HEAD
=======
                    //Atribuindo problemas
                    
>>>>>>> 4e3e03ac42ddab93a243ec13ca32f2bb3ba3e82d
		    if ($time != 1 || $time != 2 || $time != 3)
		    {
                    	echo $this->tryOnesLuck(rand(0, 10));
		    }

<<<<<<< HEAD
                        $meterCurrentCarA = $this->getDistance($this->speedCurrentCarA,$carA->getTopSpeed());
                        $lastMeterA = $this->getLastMeter($lastMeterA,$meterCurrentCarA);

                        $meterCurrentCarB = $this->getDistance($this->speedCurrentCarB,$carB->getTopSpeed());
                        $lastMeterB = $this->getLastMeter($lastMeterB,$meterCurrentCarB);
=======
                    /*if ($this->speedCurrentCarA < 0 )
                    {
                        $this->speedCurrentCarA = 0;
                    }
                    else
                    {*/
                        $meterCurrentCarA = $this->getDistance($this->speedCurrentCarA,$carA->getTopSpeed());
                        $lastMeterA = $this->getLastMeter($lastMeterA,$meterCurrentCarA);
                    /*}

                    if ($this->speedCurrentCarB < 0 )
                    {
                        $this->speedCurrentCarB = 0;

                    }
                    else
                    {*/
                        $meterCurrentCarB = $this->getDistance($this->speedCurrentCarB,$carB->getTopSpeed());
                        $lastMeterB = $this->getLastMeter($lastMeterB,$meterCurrentCarB);
                    /*}*/
>>>>>>> 4e3e03ac42ddab93a243ec13ca32f2bb3ba3e82d
                    
                    $winner = $this->verifyWinner($lastMeterA, $lastMeterB,$distanceStreet);
                    
                    if (!empty($winner))
                    {
<<<<<<< HEAD
=======
//                        return $winner;
//                        exit();
>>>>>>> 4e3e03ac42ddab93a243ec13ca32f2bb3ba3e82d
                          break;
                    }
                    
                    echo $this->getResultPerSecond($lastMeterA, $lastMeterB, $distanceStreet,$this->speedCurrentCarA, $this->speedCurrentCarB);
            }
            
            return $winner;
        }

}
