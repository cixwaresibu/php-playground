<?php
    $arr = [15, 20, 5, 4, 3, 20, 6, 51, 99, 80];
    echo 'Array before sorting '."<br/>";
    print_r($arr);
    echo "<br/>";
        $count = count($arr);
        for ($i = 0; $i < $count; $i++) 
        {
            for ($j = $i + 1; $j < $count; $j++)
            {
                if ($arr[$i] > $arr[$j]) 
                {
                    $temp =  $arr[$i];
                    $arr[$i] = $arr[$j];
                    $arr[$j] = $temp;
                }
            }
        }
        echo 'Array after sorting'. "<br/>";
        print_r($arr);
        

        
       
?>