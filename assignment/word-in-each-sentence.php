<?php
    $str = 'Lorem ipsum dolor sit amet, esse consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla esse pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt esse mollit anim id est laborum.';
    $array = explode('.',$str); //counting words on each sentences
 /*   echo 'First sentence contains '.str_word_count($array[0]).' words'."<br>";
    echo 'Second sentence contains '.str_word_count($array[1]).' words'."<br>";
    echo 'Third sentence contains '.str_word_count($array[2]).' words'."<br>";
    echo 'Fourth sentence contains '.str_word_count($array[3]).' words'."<br>";
    */
    foreach ($array as $sentence){
        print_r(str_word_count($sentence)."<br>");
    }
?>