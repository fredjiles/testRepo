<?php
include_once('testClass.php');

class testClassTest extends \PHPUnit_Framework_TestCase
{
    public function testCanTest()
    {
        $this->assertTrue(true);
    }

    public function testCanNotPass()
    {
        $this->assertFalse(false);
    }
}
