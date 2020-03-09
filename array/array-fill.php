<?php
$a = array_fill(5, 6, 'banana'); //fill $a with banana from index 5 and add 6 element of value banana
$b = array_fill(-5, 4, 'pear'); //fill index -2 and 0 1 2 with pear
print_r($a);
echo "<br>"; //array doesnot continue indexing like -3 -2 -1 it uses -3 then jumps to 0
print_r($b);
?>