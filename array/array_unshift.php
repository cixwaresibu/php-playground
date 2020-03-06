<?php
    $array = array(4,5,6);
    print_r($array);
    echo "<br>";
    //array_unshift assign gives elements at front end without modifying other elements
    array_unshift($array,1,2,3);
    print_r($array);
?>