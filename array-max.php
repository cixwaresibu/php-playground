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
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";

    function arrayMaxNumber($array){
        $total = count($array);
        $maximum = $array[0];
        for ($i=0;$i<$total;$i++){
            if($array[$i]>$maximum){
                $maximum = $array[$i];
            }
        }
        return $maximum;
    }
    
    echo arrayMaxNumber([15, 20, 5, 4, 3, 20, 6, 51, 99, 80]);
?>