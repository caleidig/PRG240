<?
$IntVariable = 75;
if($IntVariable>100)
	$Result = '$IntVariable is greater than 100';
else
	$Result = '$IntVariable is less than or equal to 100';

$Result = ($IntVariable > 100) ? '$IntVariable is greater than 100' : '$IntVariable is less than or equal to 100';
echo $Result;

?>