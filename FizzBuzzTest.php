<?php
  include 'programmerFizzBuzz.php';
  class FizzbuzzTest extends PHPUnit_Framework_TestCase {
 
  function setUp() {
    $this->programmer = new programmer();
  }

  function testReturnNumber() {
    $expectedResult='1';
    $actualResult = $this->programmer->answerQuestion(1);
    $this->assertEquals($expectedResult, $actualResult);
    
    $expectedResult='2';
    $actualResult = $this->programmer->answerQuestion(2);
    $this->assertEquals($expectedResult, $actualResult);

  }

  function testReturnFizz() {
    $expectedResult='Fizz';
    $actualResult = $this->programmer->answerQuestion(3);
    $this->assertEquals($expectedResult, $actualResult);

    $actualResult = $this->programmer->answerQuestion(6);
    $this->assertEquals($expectedResult, $actualResult);
  }

  function testReturnBuzz() {
    $expectedResult='Buzz';
    $actualResult = $this->programmer->answerQuestion(5);
    $this->assertEquals($expectedResult, $actualResult);

    $actualResult = $this->programmer->answerQuestion(10);
    $this->assertEquals($expectedResult, $actualResult);
  }

  function testReturnFizzBuzz() {
    $expectedResult='FizzBuzz';
    $actualResult = $this->programmer->answerQuestion(15);
    $this->assertEquals($expectedResult, $actualResult);
  }
 
  }

?>
