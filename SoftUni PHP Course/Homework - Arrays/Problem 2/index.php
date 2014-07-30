<?php

//Condition: Largest sequence of equal strings

$sequences = array('a', 'b', 'b', 'xxx', 'c', 'c', 'c');
function findLongestSequence($array) {
    $longest = array();
    for($i = 0; $i < count($array) - 1; $i++) {
        if($array[$i] === $array[$i+1] && $i < (count($array) - 2)) {
                array_push($longest, $array[$i], $array[$i+1]);
        }
    }
    return $longest;
}
var_dump(findLongestSequence($sequences));