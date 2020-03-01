<?php
    $str = 'hey! we are very obident student. we are student of csit and also we are student of php in cixware';
    echo $str;
    echo "<br>";
    echo str_replace("student","teacher",$str);
    $str1 = str_replace("student","teacher",$str);
    echo "<br>";
    echo str_replace("are","were",$str,$count);
    echo "<br>";
    echo $count;
    echo "<br>";
    echo str_replace("are","were",$str1);
?>