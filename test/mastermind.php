<?php

  $num1=rand(1,9);
  $num2=rand(1,9);
  $num3=rand(1,9);
  $num4=rand(1,9);
 
  $codeArr = [];
  array_push($codeArr, $num1, $num2, $num3, $num4);
  $arrToString = implode($codeArr);
  echo $arrToString.PHP_EOL;

  $tries = 0;

  function guessCode($string){
    echo $string.PHP_EOL;
  };

  $guess = guessCode("1234");

  $tries++;
  echo $tries;

    if($guess === $arrToString){
        echo "Bravo, you guessed right !".PHP_EOL;
    } elseif($tries<=10) {
        echo "keep guessing !".PHP_EOL;
    } else {
        echo "You're done guessing !".PHP_EOL;
    }
   