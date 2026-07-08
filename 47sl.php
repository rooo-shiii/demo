<?php 
$colors = array("Red", "Green", "Blue");

//count elements
echo count($colors); //3
 //add new colors
 array_push($colors, "Yelllow");

 //remove last elements
 array_pop($colors);

 //check value
 if(in_array("Red", $colors)){
    echo"Red is available !";
 }
 ?>