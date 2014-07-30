<?php

//Condition: Combine list of letters

$str1 = 'h e l l o';
$str2 = 'e l o w';

$array1 = explode(' ', $str1);
$array2 = explode(' ', $str2);

for($i = 0; $i < count($array1); $i++) {
    for($j = $i; $j < count($array2); $j++) {
        if(!(in_array($array2[$j], $array1))) {
            array_push($array1, $array2[$j]);
        }
    }
}

var_dump($array1);