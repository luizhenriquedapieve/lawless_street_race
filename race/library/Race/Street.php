<?php
class Street
{
    protected $distance;
    
        public function __construct($distance)
        {
           !is_string($distance) ? $this->distance = $distance : $this->distance = NULL;
        }

        public function getDistance()
        {
            return $this->distance;
        }
}