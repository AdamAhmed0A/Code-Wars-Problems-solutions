<?php
function smaller(array $nums): array {
  $length = count($nums);
  $res = [];
    for($i = 0; $i < $length; $i++){
      $count = 0;
      for($j = $i + 1; $j < $length; $j++){
        if ($nums[$i] > $nums[$j]) $count++;
        }
      
      $res[] = $count;
      }
  return $res;
}
