<?php
/*
  $array = ['a', 'b','c','d','e'];
  function reverse($array){
    $reverse=[];
    $count = count($array);
   
    for($i=$count -1; $i>=0; $i--)
    {
      $reverse[]= $array[$i];
      
    }
    return $reverse;
  }
  $output=reverse($array);
  print_r($output);
  var_dump($output);
*/



  $newarray = [5,1,3,2,4];
  print_r($newarray);

  sort($newarray);
  // $arraylength=count($newarray);
  // for($i=0;$i<$arraylength;$i++){
  //   echo $newarray[$i];
  //   echo "<br/>";
  // }
  var_dump($newarray);
  
?>