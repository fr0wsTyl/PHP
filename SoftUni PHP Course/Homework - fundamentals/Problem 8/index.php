<?php


//Condition: Print all Prime numbers

$n = 100;

for($i=1; $i<=$n; $i++) {
    if(!($i % 3 == 0) && !($i % 2 == 0)) {
        echo "$i is prime".'<br />';
    }
}