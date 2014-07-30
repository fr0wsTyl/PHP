<?php

//Condition: Sort numbers
$num1 = 5;
$num2 = 122;
$num3 = -5;

$numbers = array($num1, $num2, $num3);
echo 'Unsorted: ';
var_dump($numbers);
sort($numbers);
echo 'Sorted: ';
var_dump($numbers);
