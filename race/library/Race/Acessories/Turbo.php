<?php
class Acessories_Turbo implements CarAcessories
{
	public function useIt()
	{
		return 70;
	}

	public function getName()
	{
		return 'Turbo';
	}
	
	public function __toString()
	{
		return $this->getName();
	}

}