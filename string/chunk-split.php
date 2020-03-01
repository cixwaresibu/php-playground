<?php
    $str = 'hey there! my name is sibu dhital';
    $str1 = 'hey you! you want me to fight with you';
    echo $str;
    echo "<br>";
    echo $str1;
    echo "<br>";
    echo chunk_split($str,6,'*');
    echo "<br>";
    echo chunk_split($str1,4,'/');
?>