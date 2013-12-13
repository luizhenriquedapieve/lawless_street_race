<?php
#include '../../../library/Race/Street.php';

class StreetTest extends PHPUnit_Framework_TestCase
{
        protected $street;
	
	public function setUp()
	{
            $this->street = new Street(1000);
	}
        
        public function tearDown()
        {
            $this->street = NULL;
        }
        
        public function testCarConstructor()
	{
            $this->assertTrue($this->street instanceof Street);
	}
        
        public function testGetDistance()
        {
            $this->assertEquals(1000, $this->street->getDistance());
           
            $this->street = new Street('1000');
            $this->assertNull($this->street->getDistance());
        }
}
