<?php
    $fruit = array("bananas", "apples", "peaches");
    print_r($fruit);
    echo "<br>";
    unset($fruit[1]);
    print_r($fruit);
    //unset function delete the element from given index
?>

<?php
    echo"<br>";
    $array = array(4,5,6);
    print_r($array);
    echo "<br>";
    unset($array[1]);
    print_r($array);
    echo "<br>";
?>


<?php
    $names = array('fname'=>'sibu','lname'=>'dhital','mobile'=>'not-assigned');
    print_r($names);
    echo "<br>";
    unset($names['lname']);
    print_r($names);
