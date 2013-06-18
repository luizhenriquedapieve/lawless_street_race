<?php
class Problems_RainTest extends PHPUnit_Framework_TestCase 
{
	protected $rain;
	
	public function setUp()
	{
		$this->rain = new Problems_Rain();
	}
        
        public function testRainConstructor()
	{
		$this->assertTrue($this->rain instanceof Problems_Rain);
	}
        
        public function testSetTime()
        {
            $this->assertEquals(3, $this->rain->setTime(3));
            $this->assertEquals(NULL, $this->rain->setTime('3'));
            $this->assertNull($this->rain->setTime('3'));
        }
        
        public function testSetMl()
        {
            $this->assertEquals(4, $this->rain->setMl(4));
            $this->assertEquals(NULL, $this->rain->setMl('4'));
            $this->assertNull($this->rain->setMl('3'));
        }
        
        public function testGetDamage()
        {
            $this->rain->setTime(3);
            $this->rain->setMl(5);
            $this->assertEquals(15, $this->rain->getDamage());
            
        }
        
        
}
