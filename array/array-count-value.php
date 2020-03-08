<?php 
$ar = array('J. Karjalainen', 'J. Karjalainen', 60, '60', 'J. Karjalainen', 'j. karjalainen', 'Fastway', 'FASTWAY', 'Fastway', 'fastway', 'YUP');
$ar2 = array_count_values($ar);

print_r($ar);

echo "<br><br>";
print_r($ar2);
?>