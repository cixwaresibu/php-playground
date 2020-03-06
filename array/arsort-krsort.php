<?php
    $fruit = array("bananas", "apples", "peaches","mango","orange","graps");
    print_r($fruit);
    echo "<br>";
    arsort($fruit); //arsort function sort the array in descending order and also preserve the index
    print_r($fruit);
    echo "<br>";
?>

<?php
    $fruit = array("bananas", "apples", "peaches","mango","orange","graps");
    print_r($fruit);
    echo "<br>";
    krsort($fruit); //krsort function sort the array in ascending order considering the key  and also preserve the element associated with each key
    print_r($fruit);
    echo "<br>";
?>

<?php 

    $array = array(1,2,5,7,3,4,8,9,6);
    print_r($array);
    echo "<br>";
    arsort($array);  //arsort function sort the array in descending order and also preserve the index
    print_r($array);
    echo "<br>";
?>

<?php 
    $array = array(1,2,5,7,3,4,8,9,6);
    print_r($array);
    echo "<br>";
    krsort($array); //krsort function sort the array in ascending order considering the key  and also preserve the element associated with each key
    print_r($array);
    
?>