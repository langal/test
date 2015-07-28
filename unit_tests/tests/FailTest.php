<?php
class Test extends PHPUnit_Framework_TestCase
{
    public function testTrue() {
        $this->assertEquals(1,1);
    }

    public function testFalse() {
        $this->assertEquals(2,1);
    }
}
?>
