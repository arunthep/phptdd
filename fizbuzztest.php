<?php
include 'fizbuzz.php';

class fizbuzzTest extends PHPUnit_Framework_TestCase{
	function setUp(){
		$this->fizzBuzz = new FizzBuzz();
	}
	
	function test1return1(){
		$result = $this->fizzBuzz->process(1);
		$this->assertEquals(1, $result);	
	}

	function test2return2(){
		$result = $this->fizzBuzz->process(2);
		$this->assertEquals(2, $result);	
	}
	
	function test3returnfizz(){
		$result = $this->fizzBuzz->process(3);
		$this->assertEquals('fizz', $result);
	}
	
	function test5returnbuzz(){
		$result = $this->fizzBuzz->process(5);
		$this->assertEquals('buzz', $result);
	}
}

