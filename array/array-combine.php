<?php
$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
$c = array_combine($a, $b);

print_r($c); //$a become key and $b become value
?>

<?php
$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana','fiber');
$c = array_combine($a, $b);// both array must have equal number of element

print_r($c); 
/* */
?>