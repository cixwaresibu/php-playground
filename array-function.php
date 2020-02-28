<?php
$arr1 = [];
$arr2 = [];
$arr = [15, 20, 5, 4, 3, 20, 6, 51, 99, 80];
function sortArray($array) //array sorting
{
    $count = count($array);
        for ($i = 0; $i < $count; $i++) 
        {
            for ($j = $i + 1; $j < $count; $j++)
            {
                if ($array[$i] > $array[$j]) 
                {
                    $temp =  $array[$i];
                    $array[$i] = $array[$j];
                    $array[$j] = $temp;
                }
            }
        }
    print_r($array);
    echo "<br/>";
    return $array;
}

function filterArray($array) //splitting the array
{
    global $arr1;
    global $arr2;

    $sorted = sortArray($array); //array sorted
    $arrSize = count($sorted);
    $splitSize = (int)($arrSize/2);

    foreach($sorted as $key => $value){
        if($key < $splitSize){
            $arr1[]=$value;
        }
        else {
            $arr2[]=$value;
        }
    }

}

filterArray($arr);

echo json_encode($arr1);
echo "<br/>";
echo json_encode($arr2);
?>