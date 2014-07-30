<?php

//Condition: Extract Words

$arr_names = array('Nakov', 'Svetlin', 'Nakov', 'Pesho', 'Mario', 'Dimityr', 'Georgi', 'Mario');
function extractWords($arr){
    $arr = array_unique($arr);
    return $arr;
}
var_dump(extractWords($arr_names));