<?php
    $arr = [15, 20, 5, 4, 3, 20, 6, 51, 99, 80];
    $count = count($arr);
    $max = $arr[0];
    for ($i=0;$i<$count;$i++){
        if($arr[$i]>$max){
            $max = $arr[$i];
        }
    }
    echo $max;
?>