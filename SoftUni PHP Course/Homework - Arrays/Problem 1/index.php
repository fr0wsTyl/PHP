<?php

//Condition: Print array

$array = array();

for($i = 0; $i < 20; $i++) {
    $random = rand(0,20);
    array_push($array, $random);
}
var_dump($array);

for($i = 0; $i < count($array); $i++) {
    $array[$i] *= 5;
}

var_dump($array);