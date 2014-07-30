<?php

//Condition: Matrix of numbers

$n = 2;
if($n > 1 && $n <= 20) {
    matrixNumbers($n);
}
else {
    echo "number must be between 1 and 20!";
}
function matrixNumbers($n) {
    for($i = 1; $i <= $n; $i++) {
        for($j = $i; $j < $i+$n; $j++) {
            echo $j.' ';
        }
        echo '<br />';
    }
}