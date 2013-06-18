<?php
//Class óleo
class Problems_Oil implements StreetProblems
{
    protected $quantity;
    protected $damage;

    public function setQuantity($quantity)
    {

        !is_string($quantity) ? $this->quantity = $quantity : $this->quantity = NULL;
        return $this->quantity;

    }

    public function getDamage()
    {

       !empty($this->quantity) ? $this->damage = $this->quantity * 0.0010 : $this->quantity = NULL ;

        return $this->damage;
    }
}