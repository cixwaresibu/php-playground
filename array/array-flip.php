<?php
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array(2,4,3,1,5,7,9,5);

// the array_flip function just interchange the key and value of array the key now becomes value and value becomes key
$result=array_flip($a1);
print_r($a1);
echo "<br>";
print_r($result);
echo "<br>";
echo "<br>";
print_r($a2);
echo "<br>";
print_r(array_flip($a2)); 
?>


