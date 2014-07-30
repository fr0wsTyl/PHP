<?php
//Condition: Write an if statement that examines two integer variables and exchanges their value if the first one is greater than the second one.

$numberA = 5;
$numberB = 3;
echo 'Variable A:  '.$numberA.'<br />';
echo 'Variable B: '.$numberB.'<br />';
if($numberA > $numberB) {
    $numberA = $numberB;
}
echo 'Variable A after exchanges: '.$numberA.'<br />';
echo 'Variable B after exchanges: '.$numberB;