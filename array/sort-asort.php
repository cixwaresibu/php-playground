<?php
    $fruit = array("bananas", "apples", "peaches","mango","orange","graps");
    print_r($fruit);
    echo "<br>";
    sort($fruit); //sort function sort the array in ascending order but do not preserve the index
    print_r($fruit);
    echo "<br>";
?>

<?php
    $fruit = array("bananas", "apples", "peaches","mango","orange","graps");
    print_r($fruit);
    echo "<br>";
    asort($fruit); //asort function sort the array in ascending order and also preserve the index
    print_r($fruit);
    echo "<br>";
?>

<?php 
    $array = array(1,2,5,7,3,4,8,9,6);
    print_r($array);
    echo "<br>";
    sort($array);
    print_r($array);
    echo "<br>";
?>

<?php 
    $array = array(1,2,5,7,3,4,8,9,6);
    print_r($array);
    echo "<br>";
    asort($array);
    print_r($array);
?>