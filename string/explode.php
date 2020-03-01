<?php
    $str='hey you! how are you doin myan';
    print_r(explode(' ',$str,4));
    echo "<br>";
    //explode('separator',string-variable,limit);

    $array = ['sibu','dhital','is','a','bad','boy'];
    echo implode(' ',$array).".";
?>