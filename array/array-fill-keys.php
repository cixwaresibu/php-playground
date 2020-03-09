<?php
$keys=array("a","b","c","d");
$a1=array_fill_keys($keys,"blue"); //keys can be inserted through array
print_r($a1);

echo "<br><br>";
?>

<?php
    $keys=array("a","b","c","d");
    $value =array("red","green","blue","white");
    $array = array_fill_keys($keys,$value); //if we insert array as value each key contain all value and auto index is done
    print_r($array);
?>