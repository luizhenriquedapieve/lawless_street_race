<?php
class Acessories_EngineExtreme implements CarAcessories
{
	public function useIt()
	{
		return 130;
	}

	public function getName()
	{
		return 'EngineExtreme';
	}
	
	public function __toString()
	{
		return $this->getName();
	}

}
