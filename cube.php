<?php
function findNb($m) {
    if($m < 1){
      return false;
    }
    if($m == 1){
        return 1;
    }
  else {
   return  pow($m,3) + findNb($m-1); 
  }
}

print(findNb(1));
?>