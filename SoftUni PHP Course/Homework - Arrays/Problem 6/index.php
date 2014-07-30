<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Arrays Homework</title>
</head>
<?php
    $result = '';
    if($_GET) {
        $first_number = $_GET['first-number'];
        $second_number = $_GET['second-number'];
        switch($_GET['select']) {
            case 'plus':
                $result = (int)$first_number + (int)$second_number;
                break;
            case 'minus':
                $result = (int)$first_number - (int)$second_number;
                break;
            case 'multiplied':
                $result = (int)$first_number * (int)$second_number;
                break;
            case 'divided':
                $result = (int)$first_number / (int)$second_number;
                break;
        }
    }
?>
<form action="index.php" method="get">
    <label for="first-number">Enter first number</label>
    <input id="first-number" type="text" name="first-number"/><br/>
    <label for="select">Select operator</label>
    <select id="select" name="select"> <br />
        <option value="plus">+</option>

        <option value="minus">-</option>

        <option value="multiplied">*</option>

        <option value="divided">/</option>
    </select>
    <br />
    <label for="second-number">Enter second number</label>
    <input id="second-number" type="text" name="second-number" /><br />
    <input type="submit" value="Calculate">
    <p>Result: <?= $result ?></p>
</form>

</html>