<?php

//Condition: Toto
$a;
$b;
$c;
$d;
$e;
$f;
$combinations = 0;
for($a = 1; $a <= 44; $a++) {
   for($b = $a+1; $b < 45; $b++) {
       for($c = $b + 1; $c < 46; $c++) {
           for($d = $c + 1; $d < 47; $d++) {
               for($e = $d + 1; $e < 48; $e++) {
                   for($f = $e + 1; $f < 49; $f++) {

                       $combinations += $a;

                       $combinations += $b;

                       $combinations += $c;

                       $combinations += $d;

                       $combinations += $e;

                       $combinations += $f;
                   }
               }
           }
       }
   }

}
echo $combinations;