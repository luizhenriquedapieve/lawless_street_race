<?php
class Engine implements CarEngine
{
    protected $hp;
    
        public function __construct($hp)
        {
                $this->hp = $hp;
        }

        public function getHp()
        {
                return $this->hp;
        }

}
