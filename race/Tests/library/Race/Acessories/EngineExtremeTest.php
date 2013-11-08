<?php
class Acessories_EngineExtremeTest extends PHPUnit_Framework_TestCase 
{
	protected $acessorie;
	
	public function setUp()
	{
		$this->acessorie = new Acessories_EngineExtreme();
	}
	
	public function testAssertThatAcessorieIsUsable()
	{
		$this->assertInstanceOf('CarAcessories', $this->acessorie);
	}
	
	public function testUseIt()
	{
		$this->assertEquals(130, $this->acessorie->useIt());
	}
	
	public function testGetName()
	{
		$this->assertEquals('EngineExtreme', $this->acessorie->getName());
	}	
}