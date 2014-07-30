<?php

//Condition: Removes names

$firstStr = 'Peter Vanessa Vanessa Maria Todor Steve Diana Steve Todor Steve Nakov';
$secondStr = 'Nakov Vanessa Maria StevE';

$firstArr = explode(' ', strtolower($firstStr));
$secondArr = explode(' ', strtolower($secondStr));
$result = array_diff($firstArr, $secondArr);

$toStr = implode(' ', $result);

echo $toStr;
var_dump($result);