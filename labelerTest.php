<?php
include 'randomer.php';
include 'labeler.php';
include 'programmerFizzBuzz.php';

class labelerTest extends PHPUnit_Framework_TestCase{
        function setUp () {
		$this->randomer = new randomer();
                $this->fizzBuzz = new programmer();
		$this->labeler = new labeler($this->fizzBuzz);
	}

	function testGetNumberFromRandomerShouldReturnANumber(){
		$this->labeler->setNumber($this->randomer->getNumber());
                $actualResult = $this->labeler->getNumber();
		$this->assertTrue(is_int($actualResult));
	}
	function testMockThreeShouldReturnFizz(){
		$this->labeler->setNumber(3);
		$actualResult = $this->labeler->getLabel();
		$expectedResult = 'Fizz';
		$this->assertEquals($actualResult, $expectedResult);		
	}

	function testMockSixShouldReturnFizz(){
		$this->labeler->setNumber(6);
		$actualResult = $this->labeler->getLabel();
		$expectedResult = 'Fizz';
		$this->assertEquals($actualResult, $expectedResult);		
	}


	function testMockFiveShouldReturnBuzz(){
		$this->labeler->setNumber(5);
		$actualResult = $this->labeler->getLabel();
		$expectedResult = 'Buzz';
		$this->assertEquals($actualResult, $expectedResult);		
	}
}
?>
