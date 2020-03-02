<?php
    $str = 'hey man! why are you so sad';
    $name = '686579206d616e21207768792061726520796f7520736f20736164';
    $garbage = 'sibu';
    echo bin2hex($str);
    echo "<br>";
    echo bin2hex($garbage);
    echo "<br>";
    echo hex2bin($name);
?>