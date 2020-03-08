<?php
$a1=array("a"=>"red","b"=>"green","c"=>"blue","f"=>"gray");
$a2=array("a"=>"reddish","c"=>"blue","b"=>"green","g"=>"white");
// as a contain different value but it doesnot return a and there is not f key in a2 it returns f
$result=array_diff_key($a1,$a2);
print_r($result);
?>