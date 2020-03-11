<?php
    $studentRecords = array(
        array("id"=>1,"name"=>"arun", "class" => 8, "gender"=> "male"),
        array("id"=>2,"name"=>"anita", "class" => 5, "gender"=> "female"),
        array("id"=>3,"name"=>"binod", "class" => 7, "gender"=> "male"),
        array("id"=>10,"name"=>"punam", "class" => 20, "gender"=> "female"),
        array("id"=>11,"name"=>"madan", "class" => 22, "gender"=> "male"),
        array("id"=>13,"name"=>"ashma", "class" => 13, "gender"=> "female"));

        $female = array_filter($studentRecords,function($student){
            return $student["gender"]=="female";
        });
    print_r($female);
    ?>

 
        <br>
        <br>

<?php
function odd($var)
{
    // returns whether the input integer is odd
    return $var & 1;
}

function even($var)
{
    // returns whether the input integer is even
    return !($var & 1);
}

$array1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$array2 = [6, 7, 8, 9, 10, 11, 12];

echo "Odd :\n";
print_r(array_filter($array1, "odd"));
echo "<br>";
echo "Even:\n";
print_r(array_filter($array2, "even"));
?>