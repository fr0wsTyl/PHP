<?php

//Condition: Extract all valid URLs

$someText = 'Hello, I come from http://telerikacademy.com . My favourite is their forum http://invalid.com . Bye! www.wf-bg.com :)';
$someTextArr = explode(' ', $someText);

$pattern = '#(?i)\b((?:[a-z][\w-]+:(?:/{1,3}|[a-z0-9%])|www\d{0,3}[.]|[a-z0-9.\-]+[.][a-z]{2,4}/)(?:[^\s()<>]+|\(([^\s()<>]+|(\([^\s()<>]+\)))*\))+(?:\(([^\s()<>]+|(\([^\s()<>]+\)))*\)|[^\s`!()\[\]{};:\'".,<>?«»“”‘’]))#iS';


$matchesArr = array();

foreach ($someTextArr as $value) {
    if (preg_match($pattern, $value)) {
        array_push($matchesArr, $value);
    }
}
var_dump($matchesArr);