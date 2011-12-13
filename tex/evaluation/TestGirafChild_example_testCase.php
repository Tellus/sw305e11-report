<?php
/**
* TestGirafChild test the GirafChild 
*/
class TestGirafChild extends UnitTestCase
{
	function testGetFunction()
    {
        $u = GirafChild::getGirafChild(1);
        $this->assertNotNull($u, "Ensuring non-null return on child creation.");
        $this->assertTrue($u != false, "Ensuring non-false return on child creation.");
	}
}
?>