<?php
    $studentRecords = array(
        array("id"=>1,"name"=>"arun", "class" => 8, "gender"=> "male"),
        // array("id"=>2,"name"=>"anita", "class" => 5, "gender"=> "female"),
        array("id"=>3,"name"=>"binod", "class" => 7, "gender"=> "male"),
        array("id"=>4,"name"=>"diken", "class" => 8, "gender"=> "male"),
        array("id"=>5,"name"=>"bibek", "class" => 15, "gender"=> "male"),
        array("id"=>6,"name"=>"sibu", "class" => 16, "gender"=> "male"),
        array("id"=>7,"name"=>"dilip", "class" => 12, "gender"=> "male"),
        array("id"=>8,"name"=>"kamal", "class" => 15, "gender"=> "male"),
        array("id"=>9,"name"=>"anil", "class" => 17, "gender"=> "male"),
        // array("id"=>10,"name"=>"punam", "class" => 20, "gender"=> "female"),
        array("id"=>11,"name"=>"madan", "class" => 22, "gender"=> "male"),
        array("id"=>12,"name"=>"nabin", "class" => 13, "gender"=> "male"),
       array("id"=>13,"name"=>"ashma", "class" => 13, "gender"=> "female")
        );
    function checkNariDiwas($array,$holiday,$noHoliday){
        $female = array_filter($array,function($student){
            return $student["gender"]=="female";
        });
       
        $totalFemale = count($female);
        if($totalFemale == 0){
            return $noHoliday();
        }
        else{
            return $holiday($female);
        }
    }
    checkNariDiwas($studentRecords,function($female){
        echo '<h3>'.'there are '. count($female) .' female students and they are:'.'<br>';
        foreach($female as $name){
            echo $name["name"].'<br>';
        }
        echo '</h3>';
        echo "<h2>holiday granted</h2>";
    },function(){
        echo '<h3>'."there are no female students in our school this year. So school will remain open in this NariDiwash.".'</h3>';
        
        
    });

