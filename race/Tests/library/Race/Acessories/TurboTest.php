<?php
class Acessories_TurboTest extends PHPUnit_Framework_TestCase 
{
	protected $acessorie;
	
	public function setUp()
	{
		$this->acessorie = new Acessories_Turbo();
	}
	
	public function testAssertThatAcessorieIsUsable()
	{
		$this->assertInstanceOf('CarAcessories', $this->acessorie);
	}
	
	public function testUseIt()
	{
		$this->assertEquals(70, $this->acessorie->useIt());
	}
	
	public function testGetName()
	{
		$this->assertEquals('Turbo', $this->acessorie->getName());
	}	
}