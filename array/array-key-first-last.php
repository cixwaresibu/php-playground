<?php
    $number=array('car'=>'lamborghini','bus'=>'public bus','tempo'=>'auto riksa');
    $first = array_key_first($number);//returns the first key of given array
    $last = array_key_last($number);//returns the last key of given array
    print_r($first);
    echo "<br>";
    print_r($last);
    ?>