<?php

//Condition: Binary search

$array = array(32,45,312,534,132,536,12,3,45,2312,54);

function sortByNumber($arr) {
    $second = $arr;
    sort($second);
    return $second;
}
var_dump(sortByNumber($array));