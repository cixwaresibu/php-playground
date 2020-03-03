<?php
    $str = 'Lorem ipsum dolor sit amet, esse consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla esse pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt esse mollit anim id est laborum.';
    /* $strA = str_ireplace('a','A',$str); //vowel to uppercase
    echo $strA."<br>";
    echo "<br><br><br>";
    $strE = str_ireplace('e','E',$strA);
    echo $strE."<br>";
    echo "<br><br><br>";
    $strI = str_ireplace('i','I',$strE);
    echo $strI."<br>";
    echo "<br><br><br>";
    $strO = str_ireplace('o','O',$strI);
    echo $strO."<br>";
    echo "<br><br><br>";
    $strU = str_ireplace('u','U',$strO);
    echo $strU."<br>"; */

    $vowel = array('a','e','i','o','u');
    $replace = array('A','E','I','O','U');

    echo str_replace($vowel, $replace,$str);

    ?>