<?php
$array1 = array("a" => "green", "red", "blue");
$array2 = array("b" => "green", "yellow", "red");
$result = array_intersect($array1, $array2); //returns the value of first array that also presents in second one. but the keys are preserved.
print_r($result);
?>

