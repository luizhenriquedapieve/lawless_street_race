<?php
class EngineTest extends PHPUnit_Framework_TestCase
{
    protected $engine;

	public function setUp()
	{
            $this->engine = new Engine(105);
	}
        
        public function tearDown()
        {
            $this->engine = NULL;
        }

        public function testEngineConstructor()
	{
            $this->assertTrue($this->engine instanceof Engine);
	}
        
        public function testGetHp()
        {
            $this->assertEquals(105, $this->engine->getHp());
        }
}