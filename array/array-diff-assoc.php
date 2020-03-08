<?php
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"red","b"=>"green","c"=>"blue");

$result=array_diff_assoc($a1,$a2); 
print_r($result);
?>

<?php
$a1=array("d"=>"red","b"=>"green","c"=>"blue","d"=>"yellow","e"=>"Why");
$a2=array("a"=>"red","b"=>"green","c"=>"blue","e"=>"why");

$result=array_diff_assoc($a1,$a2); //it is case sensitive as it assumes Why and why are different 
//red is present in both array but key is different hence it also return red
print_r($result);
?>