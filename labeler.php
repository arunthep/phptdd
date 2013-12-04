<?php
class labeler{
function setNumber($set_number) {
  $this->number = $set_number;
}

function getNumber() {
  return $this->number;
}
	
function getLabel() {
  if ($this->number%5 == 0) {
    return 'Buzz';
  }
  return 'Fizz';  
}	
}

?>
