<!DOCTYPE>
<html>
<head>
    <meta charset="UTF-8">
</head>
<?php

//Condition: Odd and Even Product
$numbers = '3 10 4 6 5 1';
$oddNumbers = 1;;
$evenNumbers = 1;
$nums = explode(' ', $numbers);
foreach($nums as $key => $value) {
    if($key % 2 == 0) {
        $evenNumbers *= $value;
    }
    else {
        $oddNumbers *= $value;
    }
}
echo ($oddNumbers == $evenNumbers) ? 'Равни' : 'Различни';
?>
</html>