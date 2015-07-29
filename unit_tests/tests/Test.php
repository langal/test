<?php
class Test extends PHPUnit_Framework_TestCase
{
    public function testTrue() {
        $this->assertEquals(1,1);
    }

    public function _testFalse() {
        $this->assertEquals(2,1);
    }

    public function testDB() {
        $con = mysql_connect('127.0.0.1', 'root', '');
        mysql_select_db('test');
        mysql_query("insert into test (name) values ('asd')");
        $res = mysql_query("select count(*) from test");
        while ($row = mysql_fetch_array($res)) {
            $this->assertEquals(1,$row[0]);
        } 
        mysql_close($con); 
    }
}
?>
