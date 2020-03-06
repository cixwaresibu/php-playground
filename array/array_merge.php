<?php
    $fruit = array("bananas", "apples", "peaches","mango","orange","graps");
    print_r($fruit);
    echo "<br>";
    $array = array(1,2,5,7,3,4,8,9,6);
    print_r($array);
    echo "<br>";
    print_r(array_merge($array,$fruit)); //array_merge combine two array and print the result if called 
    echo"<br>";
    print_r(array_merge($fruit,$array));
?>
