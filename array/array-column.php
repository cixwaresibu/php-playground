<?php
$details = array(
    array(
        'id' => 2135,
        'first_name' => 'John',
        'last_name' => 'Doe',
    ),
    array(
        'id' => 3245,
        'first_name' => 'Sally',
        'last_name' => 'Smith',
    ),
    array(
        'id' => 5342,
        'first_name' => 'Jane',
        'last_name' => 'Jones',
    ),
    array(
        'id' => 5623,
        'first_name' => 'Peter',
        'last_name' => 'Doe',
    )
);
print_r($details);
echo "<br><br>";
$first_names = array_column($details, 'first_name');
print_r($first_names);
echo "<br><br>";
print_r(array_column($details,'first_name','id')); //id works as the key for first_name
?>