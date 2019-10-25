<?php

function swap(&$a,&$b){

  $temp = $a;
  $a = $b;
  $b = $temp;
} 

$a="12";
$b="13";

echo "nilai sebelum di swap = $a ,$b";
echo "<br>";
swap($a,$b);
echo "nilai sesudah di swap = $a ,$b";
?>