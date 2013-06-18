<?php
//Class chuva
class Problems_Rain implements StreetProblems
{
    protected $time;
    protected $ml;
    protected $damage;
    
    public function setTime($time)
    {
        //Operador ternário
        !is_string($time) ? $time : $time = NULL;
        
        if (!empty($time))
        {
            $this->time = $time;
            return $this->time;
        }else
        {
            return $time;
        }
        
    }
    
    public function setMl($ml)
    {
        
        if (!is_string($ml))
        {
            $this->ml = $ml;
            
            if (!empty($this->time))
            {
                $this->damage = ($this->time * $this->ml);
                
            }else{
                $this->damage = NULL;
            }
            
            return $this->ml;
            
        }else{
         
            return $this->ml = NULL;
        }
        
    }
    
    public function getDamage()
    {
        if (!empty($this->damage))
        {
            return $this->damage;
            
        }else{
            
            return NULL;
        }
    }
    
    
}
