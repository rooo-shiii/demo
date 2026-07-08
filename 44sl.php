<?php
//Input number
$number = 5;

//factorial calculation without function
if($number < 0){
    echo "Factorial not defined for negative numbers.";
}else{
    $fact = 1;
    for($i = 1; $i <= $number; $i++){
        $fact *= $i;
    }
    echo "Factorial of $number is : $fact";
}
?>