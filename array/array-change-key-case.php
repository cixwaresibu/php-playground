<?php
    $fruit = array("full"=>"bananas","Half"=> "apples","allow"=> "peaches","Index"=>"mango","bag"=>"orange","Count"=>"graps");
    print_r($fruit);
    echo "<br>";
    print_r(array_change_key_case($fruit,CASE_UPPER)); //change the key to uppercase
    echo "<br>";
    print_r(array_change_key_case($fruit,CASE_LOWER)); //change the key to lowercase

?>
