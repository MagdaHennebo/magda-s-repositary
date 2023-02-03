<?php

function filterDuplicates(array $data) {
    // Write your code here
  if($data != null){
  $filteredArr = array_unique($data);
  print_r($filteredArr);
  } else {
    echo "The array cannot be null";
  }
}

filterDuplicates([1, 1, 1, 1, 1]);
