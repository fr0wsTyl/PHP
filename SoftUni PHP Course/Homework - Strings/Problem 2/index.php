<?php

//Condition: Count of letters

$letters = 'h d h a a a s d f d a d j d s h a a';

$lettersArr = explode(' ', $letters);

$result = array_count_values($lettersArr);
ksort($result);
var_dump($result);