<?php
$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "green", "b" => "yellow", "blue", "red");
$result_array = array_intersect_assoc($array1, $array2);
print_r($result_array); 
?>
<br>
<br>

<?php
    $num = array(1,3,4,6,8,3,0);
    $number = array(1,2,4,3,6,3,9);
    print_r(array_intersect_assoc($num,$number)); //it checks both key and value and return the key value pair from array1 if it is present in another array too
    ?>