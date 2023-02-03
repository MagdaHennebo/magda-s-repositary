<?php

function findKey(array $array){
    $biggestNum = max($array); 

    $key = array_search($biggestNum, $array);

    echo "I am the index for the biggest number " . $key;
}

$array = [6, 7, 10, 9];

findKey($array);
