<?php 

function tower_builder(int $n): array {
    $k = 2 * $n-2;
    $my_arr = [];
    for($i =0; $i < $n; $i++){
      for($j = 0; $j < $k; $k++){
        array_push($my_arr," ");
      } 
      $k = $k - 1;
      for($l = 0; $l < $i+1; $i++){
        array_push($my_arr,"*");
      }
      
    }
    return $my_arr;
  }

tower_builder(20)
?>