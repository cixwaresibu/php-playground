<?php
function myfunction($a,$b)
{
if ($a===$b)
  {
  return 0;
  }
  return ($a>$b)?1:-1;
}

$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("a"=>"red","b"=>"green","d"=>"blue");
$a3=array("e"=>"yellow","a"=>"red","d"=>"blue");

$result=array_intersect_uassoc($a1,$a2,$a3,"myfunction"); //Compare the keys value pair of two arrays (using a user-defined key comparison function), and return the matches:
print_r($result); //it check key value pair using an callable function and return the intersect result
?>