<?php
$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("a"=>"red","c"=>"blue","d"=>"pink");

$result=array_intersect_key($a1,$a2); //it checks two array on the basis of key  and return key=value from first array if the key is also present in another array
print_r($result);
?>