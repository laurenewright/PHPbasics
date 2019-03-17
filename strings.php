<?php
$name = "Jack";
$string_one = "Learning to display \"Hello $name!\" to the screen. \n";
echo $string_one;

$isReady = true;

$isReady = false;

var_dump(1 + "2");
$a = 10;
$b = '10';

//var_dump($a == $b);
//var_dump($a === $b);

if($string_one == 'Learning to display "Hello Jack!" to the screen.'){
  echo 'the values match';
} elseif($string_one == ""){
  echo '$string_one is empty';
}
  else {
  echo 'the values do not match';
}

?>