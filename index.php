<?php
function narcissistic(int $value) {
  $total = 0;
   $numbers = str_split($value);
    $arr_len = count($numbers);
    for($i = 0; $i < $arr_len; $i++){
       $prod = $numbers[$i] **($arr_len);
       $total += $prod; 
    }
  return ($total == $value);
   
}

print (narcissistic(199853));
?>

<!-- A Narcissistic Number is a positive number which is the sum of its own digits, each raised to the power of the number of digits in a given base. In this Kata, we will restrict ourselves to decimal (base 10).

For example, take 153 (3 digits): -->