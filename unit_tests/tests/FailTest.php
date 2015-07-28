<?php
class FailTest extends PHPUnit_Framework_TestCase
{
    public function testTrue() {
        $this->assertEquals(1,1);
    }

    public function _testFalse() {
        $this->assertEquals(2,1);
    }
}
?>
