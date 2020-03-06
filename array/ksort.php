<?php
    $fruit = array("f"=>"bananas","h"=> "apples","a"=> "peaches","i"=>"mango","b"=>"orange","c"=>"graps");
    print_r($fruit);
    echo "<br>";
    ksort($fruit); //ksort function sort the array in ascending order and also preserve the index
    print_r($fruit);
    echo "<br>";
?>

