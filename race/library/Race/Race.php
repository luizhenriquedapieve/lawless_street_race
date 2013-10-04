<?php
class Race
{
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
       
        public function getPower($hp)
        {
                return $hp * 0.1;
        }

        public function getMeter($speed, $topSpeed)
        {   
                if ($speed >= $topSpeed)
                {
                    $meter = $speed * 3.6;
                    
                    return $meter;
                }
                return $topSpeed * 1.6;
        }

        public function getSpeedCurrent($power,$time, $topSpeedCar)
        {
                $speedCurrent = $power * $time;
                
                if ($speedCurrent <= $topSpeedCar)
                {
                    return $speedCurrent ;   
                    
                }else{
                    
                    return $topSpeedCar ;   
                }
        }
	
        #Verificar a velocidade current dos carros
        
        #Verificar a distancia current dos carros        
        
        #Atribuir problema na pista
        #Atribuir acessórios nos carros
        
        public function addTrack($track)
        {
            $this->track = $track;
        }
        
        public function getTrack()
        {
            return $this->track;
        }


        
//        $hpCarA, $hpCarB, $distanceStreet,$carATopSpeed,$carBTopSpeed
        public function startRace()
        {
            $oil = new Problems_Oil();
            $oil->setQuantity(1000);
            $damageOil = $oil->getDamage();
            
            $turbo = new Acessories_Turbo();
            $turboSet = $turbo->useIt();
            $turboName = $turbo->getName();
            
            $carA = $this->racers['racerA']->getCar();
            $carB = $this->racers['racerB']->getCar();
             
            $distanceStreet = $this->getTrack()->getDistance();
            
            for($time = 1; $time <= 60; $time++)
            {
                    $powerCarA = self::getPower($carA->getHp());
                    $speedCurrentCarA = self::getSpeedCurrent($powerCarA,$time,$carA->getTopSpeed());
                    

                    $powerCarB = self::getPower($carB->getHp());
                    $speedCurrentCarB = self::getSpeedCurrent($powerCarB,$time,$carB->getTopSpeed());
                    
                    echo "******************************** \n";
                    echo $time."s \n";
                    
                    //Atribuindo problemas 
                    $random = rand(0, 10);
                    
                    switch ($random){
                        
                        case 0:
                            echo "O oleo afetou o carro A \n";
                            $speedCurrentCarA = $speedCurrentCarA - ($damageOil * 50);
                            break;
                        case 1:
                            echo "O oleo afetou o carro B \n";
                            $speedCurrentCarB = $speedCurrentCarB - ($damageOil * 50);
                            break;
                        case 4:
                            echo "Carro A assionou o ".$turboName."\n";
                            $speedCurrentCarA = $speedCurrentCarA + $turboSet;
                            break;
                        case 5:
                            echo "Carro B assionou o ".$turboName."\n";
                            $speedCurrentCarB = $speedCurrentCarB + $turboSet;
                            break;
                    } 
                    
                    $MeterCurrentCarA = self::getMeter($speedCurrentCarA,$carA->getTopSpeed());
                    $MeterCurrentCarB = self::getMeter($speedCurrentCarB,$carB->getTopSpeed());
                    
                    if ($MeterCurrentCarA > $MeterCurrentCarB)
                    {
                        if ($MeterCurrentCarA >= $distanceStreet)
                        {
                            echo " Vencedor é A \n";
                            exit();
                        }
                        
                        echo "Carro A está com a velocidade de ".$speedCurrentCarA." km/h e percorreu ".$MeterCurrentCarA." m \n";
                        echo "Carro B está com a velocidade de ".$speedCurrentCarB." km/h e percorreu ".$MeterCurrentCarB." m \n";
                        
                    }else{
                        
                        if ($MeterCurrentCarB >= $distanceStreet)
                        {
                            echo " Vencedor é B \n";
                            exit();
                        }
                        
                        echo "Carro B está com a velocidade de ".$speedCurrentCarB." km/h e percorreu ".$MeterCurrentCarB." m \n";
                        echo "Carro A está com a velocidade de ".$speedCurrentCarA." km/h e percorreu ".$MeterCurrentCarA." m \n";
                    }   
            }
        }

}
