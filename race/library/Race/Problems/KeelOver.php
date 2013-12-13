<?php
//Class capotar
class Problems_KeelOver
{

    public function setActivate($option)
    {
        //Idêntico - variavel $option é igual e de mesmo tipo (PHP4)
        if ($option === TRUE || $option === FALSE)
        {
            return $option;
        }else
        {
            return NULL;
        }
    }

}
