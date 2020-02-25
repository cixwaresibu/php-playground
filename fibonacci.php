<?php
    $a=0;
    $b=1;

    // echo $a ."<br/>".$b ."<br/>";
    

    echo $a."<br/>".$b ."<br/>";
    do {
        $c =$a+$b;
        echo $c."<br/>";
        $a=$b;
        $b=$c;
    } while($b<150);
?>