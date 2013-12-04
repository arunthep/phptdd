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
	
	function testMockOneShouldReturnNewDrawMessage(){
		$this->labeler->setNumber(1);
		$actualResult = $this->labeler->getLabel();
		$expectedResult = 'New Draw';
		$this->assertEquals($actualResult, $expectedResult);		
	}
	function testMockEightShouldReturnNewDrawMessage(){
		$this->labeler->setNumber(8);
		$actualResult = $this->labeler->getLabel();
		$expectedResult = 'New Draw';
		$this->assertEquals($actualResult, $expectedResult);		
	}

	function testGetRandomerToShowFizzBuzz() {
                $expectedResult = array (
			1 => 'New Draw',
			2 => 'New Draw',
			3 => 'Fizz',
			4 => 'New Draw',
			5 => 'Buzz',
			6 => 'Fizz',
			7 => 'New Draw',
			8 => 'New Draw',
			9 => 'Fizz'
		);
		$randomResult = $this->randomer->getNumber();
		$this->labeler->setNumber($randomResult);
		$actualResult = $this->labeler->getLabel();
		$this->assertEquals($actualResult, $expectedResult[$randomResult]);		
        }
}
?>
