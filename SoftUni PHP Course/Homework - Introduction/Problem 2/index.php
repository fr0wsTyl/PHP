<?php 
	//Condition: Type of variable
	$intNum = 5;
	$floatNum = 1.5;
	$string = 'Zdrasti';
	$bool = true;
	$array = array('hi', 'parm2');
	$null = null;
	$obj = (object) 'asdf';

	echo gettype($intNum).'<br />';
	echo gettype($floatNum).'<br />';
	echo gettype($string).'<br />';
	echo gettype($bool).'<br />';
	echo gettype($array).'<br />';
	echo gettype($null).'<br />';
	echo gettype($obj).'<br />';
?>