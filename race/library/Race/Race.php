<?php
class Race
{
        protected $racers = array();
	
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
		
		public function getMeter($speed)
        {
			return $speed * 3.6;
		}
		
        public function startRace($hpCarA, $hpCarB, $distanceStreet)
        {
                
        }       

}
