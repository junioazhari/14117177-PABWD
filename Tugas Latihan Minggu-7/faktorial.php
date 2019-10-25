<?php
function faktorial ($a){
  if($a <=1){
      $hasil = 1;
      return $hasil;
    } else if($a>1){
      for ($i=1; $i<$a; $i++){
              $hasil = $a * faktorial($a -1);
            }
      return $hasil;
    }
}
  $a ="5";
  echo  faktorial($a);
  echo $hasil;
?>