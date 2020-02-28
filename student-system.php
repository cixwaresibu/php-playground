<?php
    $marks = [19, 90, 4, 29, 1, 23, 5, 88, 73, 32, 42, 28, 91, 8, 52, 76, 82, 63, 33, 20, 12, 9, 71, 53, 87, 69, 70, 41, 45, 2, 58, 61, 64, 18, 0, 7, 30, 86, 80, 75, 39, 56, 81, 51, 84, 83, 89, 50, 36, 77];
    echo 'marks obtained by the student in annual exam is :'."<br/>";
    
    print_r($marks);
    echo "<br/>";
   $array1=[];
   $array2=[];
   $array3=[];
   $array4=[];
   $array5=[];
   $array6=[];
   $array7=[];
   $array8=[];
   $array9=[];
   $array10=[];
 
   //sorting the array in ascending order
 /*  $count = count($marks); 
        for ($i = 0; $i < $count; $i++) 
        {
            for ($j = $i + 1; $j < $count; $j++)
            {
                if ($marks[$i] > $marks[$j]) 
                {
                    $temp =  $marks[$i];
                    $marks[$i] = $marks[$j];
                    $marks[$j] = $temp;
                }
            }
        }
 */
  for($i=0; $i<count($marks); $i++) //grouping the students into different groups ac to the marks
  {
      if($marks[$i]<=9)
      {
          $array1[]=$marks[$i];
      }
      elseif($marks[$i]>9 && $marks[$i]<=19)
      {
          $array2[]=$marks[$i];
      }
      elseif($marks[$i]>19 && $marks[$i]<=29)
      {
          $array3[]=$marks[$i];
      }
      elseif($marks[$i]>29 && $marks[$i]<=39)
      {
          $array4[]=$marks[$i];
      }
      elseif($marks[$i]>39 && $marks[$i]<=49)
      {
          $array5[]=$marks[$i];
      }
      elseif($marks[$i]>49 && $marks[$i]<=59)
      {
          $array6[]=$marks[$i];
      }
      elseif($marks[$i]>59 && $marks[$i]<=69)
      {
          $array7[]=$marks[$i];
      }
      elseif($marks[$i]>69 && $marks[$i]<=79)
      {
          $array8[]=$marks[$i];
      }
      elseif($marks[$i]>79 && $marks[$i]<=89)
      {
          $array9[]=$marks[$i];
      }
      elseif($marks[$i]>89 && $marks[$i]<=99)
      {
          $array10[]=$marks[$i];
      }
  }
  //displaying the number of students of different groups
  echo 'total number of students is : '.count($marks)."<br/><br/>";
  echo 'Number of students who score below 9 marks is : '.count($array1)."<br/><br/>";
  echo 'Number of students who score between 10 and 19 marks is : '.count($array2)."<br/><br/>";
  echo 'Number of students who score between 20 and 29 marks is : '.count($array3)."<br/><br/>";
  echo 'Number of students who score between 30 and 39 marks is : '.count($array4)."<br/><br/>";
  echo 'Number of students who score between 40 and 49 marks is : '.count($array5)."<br/><br/>";
  echo 'Number of students who score between 50 and 59 marks is : '.count($array6)."<br/><br/>";
  echo 'Number of students who score between 60 and 69 marks is : '.count($array7)."<br/><br/>";
  echo 'Number of students who score between 70 and 79 marks is : '.count($array8)."<br/><br/>";
  echo 'Number of students who score between 80 and 89 marks is : '.count($array9)."<br/><br/>";
  echo 'Number of students who score between 90 and 99 marks is : '.count($array10)."<br/><br/>";
  
  //printing the marks of different groups

/* print_r($array1);
  echo '<br>';
  echo '<br>';
  print_r($array2);
  echo '<br>';
  echo '<br>';
  print_r($array3);
  echo '<br>';
  echo '<br>';
  print_r($array4);
  echo '<br>';
  echo '<br>';
  print_r($array5);
  echo '<br>';
  echo '<br>';
  print_r($array6);
  echo '<br>';
  echo '<br>';
  print_r($array7);
  echo '<br>';
  echo '<br>';
  print_r($array8);
  echo '<br>';
  echo '<br>';
  print_r($array9);
  echo '<br>';
  echo '<br>';
  print_r($array10);
    */
 ?>