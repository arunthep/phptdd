<?php
include 'randomer.php';

class randomerTest extends PHPUnit_Framework_TestCase {
	function testReturnInRangeOneToNine() {
		$randomer = new randomer();
		$actualResult = $randomer->getNumber();
                if ($actualResult >= 1 && $actualResult <= 9){
                  $result = true; 
                } else {
                  $result = false;
                }
                echo "$actualResult";
		$this->assertTrue($result);
	}
}
