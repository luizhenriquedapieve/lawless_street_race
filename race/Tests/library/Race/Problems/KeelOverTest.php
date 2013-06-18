<?php
class Problems_KeelOverTest extends PHPUnit_Framework_TestCase
{
	protected $keelOver;

	public function setUp()
	{
		$this->keelOver = new Problems_KeelOver();
	}

    public function testKellOverConstructor()
	{
		$this->assertTrue($this->keelOver instanceof Problems_KeelOver);
	}

    public function testSetActivate()
    {
        $this->assertEquals(TRUE, $this->keelOver->setActivate(TRUE));
        $this->assertEquals(FALSE, $this->keelOver->setActivate(FALSE));
        $this->assertNull($this->keelOver->setActivate(3));
        $this->assertNull($this->keelOver->setActivate('3'));
        $this->assertNull($this->keelOver->setActivate(''));
        $this->assertNull($this->keelOver->setActivate('L'));
    }


}