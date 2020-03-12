<?php
$a=array("Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander");
print_r($a);
echo "<br>";
print_r(array_keys($a));
echo "<br>";
?>
<!--it returns a new indexed array containing the key of provided array -->
<?php
$array = array(0 => 100, "color" => "red");
print_r($array);
echo "<br>";
print_r(array_keys($array));
echo "<br>";
$array = array("blue", "red", "green", "blue", "blue");
print_r($array);
echo "<br>";
print_r(array_keys($array, "blue"));
echo "<br>";
$array = array("color" => array("blue", "red", "green"),
               "size"  => array("small", "medium", "large"));
               print_r($array);
echo "<br>";
print_r(array_keys($array));
?>