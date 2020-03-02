<?php
    $str='hey it\'s me sakar and it is very important';
    echo $str;
    echo "<br>";
    echo 'the given substring is at position ' . strpos($str,"IT") .' in given string: '.'"' .$str. '"';
    echo "<br>";
    echo 'the given substring is at position ' . stripos($str,"it") .' in given string: '.'"' .$str. '"';
    echo "<br>";
    echo 'the given substring is at position ' . strrpos($str,"it") .' in given string: '.'"' .$str. '"';
?>