<?php
    $sample = 124565465531.65;
    echo "your provided number is $sample";
    echo "<br>";
    echo number_format($sample);
    echo "<br>";
    echo number_format($sample,8);
    echo "<br>";
    echo number_format($sample,3,",",".");
    echo "<br>";
    echo number_format($sample,19,".",",");
?>