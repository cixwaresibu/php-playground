<?php
    $citylist = array( "Black Canyon City", "Chandler", "Flagstaff", "Gilbert", "Glendale", "Globe", "Mesa", "Miami", "Phoenix", "Peoria", "Prescott", "Scottsdale", "Sun City", "Surprise", "Tempe", "Tucson", "Wickenburg" );
    print_r(array_chunk($citylist,4)); //index preserve is false bydefault
    echo "<br><br>";
    print_r(array_chunk($citylist,3,'true')); //if set to true index is preserved. 
?>