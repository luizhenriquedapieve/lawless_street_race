<?php
class Problems_OilTest extends PHPUnit_Framework_TestCase
{
	protected $oil;

	public function setUp()
	{
		$this->oil = new Problems_Oil();
	}

        public function testOilConstructor()
	{
		$this->assertTrue($this->oil instanceof Problems_Oil);
	}

    public function testSetQuantity()
    {
        $this->assertEquals(25, $this->oil->setQuantity(25));
        $this->assertEquals(NULL, $this->oil->setQuantity('25'));
        $this->assertNull($this->oil->setQuantity('25'));
    }

    public function testGetDamage()
    {
        $this->oil->setQuantity(68);
        $this->assertEquals(0.068 , $this->oil->getDamage());

        //OU
        $this->oil->setQuantity(41);
        $result = 0.041;
        $this->assertEquals($result, $this->oil->getDamage());

    }


}