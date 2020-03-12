<?php
$a=array("Volvo"=>"XC90","BMW"=>"X5");
if (array_key_exists("Volvo",$a)) //it checks wheather the provided key is present in the array or not
  {
  echo "Key exists!";
  }
else
  {
  echo "Key does not exist!";
  }
?>