<?php

//Condition: Write an expression that checks if given point (x,y) is inside circle L({0,0},2)
$inside = 'Inside circle';
$outside = 'Outside circle';

//Create Circle with start points and diameter
$startX = 0;
$startY = 0;
$diameter = 6;
$circlePoints = array($startX, $startY, $diameter);

//Create points for check
$x = 3;
$y = 1;

//Expression for checking
$radius = ($diameter / 2);
if($x <= $radius && $y <= $radius) {
    echo $inside;
}
else {
    echo $outside;
}