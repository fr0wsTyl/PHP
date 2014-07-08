<?php 
	//Condition: Write script for modify third digit in number right to left
	$integer = 1;
	$num = 101;

	function thirdDigit($number, $digitNumber) {
		$digitNumStr = (string) $digitNumber;
		$numberLength = strlen($digitNumStr);
		$indexOfStrDigit = $numberLength - 3;
		$thirdDigit = $digitNumStr[$indexOfStrDigit];

		if ($number == $thirdDigit) {
			echo "Third digit right-to-left is ".$number;
		} else {
			echo "Third digit right-to-left isn't ".$number;
		}
	}
	thirdDigit($integer, $num);
	
?>