<?php
class programmer{
  function answerQuestion($question){
    $answer = $question;
    
    if ($question%3 ==0 & $question%5 == 0){
      $answer = 'FizzBuzz';
    }elseif ($question%3 ==0){
      $answer = 'Fizz';
     }elseif ($question%5==0){
        $answer = 'Buzz';
      }
	return $answer;
   }	
}
?>
