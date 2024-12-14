<?php 
    echo "Enter a Number";

    
    $number = (int)readline();

    if ($number > 0) {
        echo "The number is positive.";
    } elseif ($number < 0) {
        echo "The number is negative.";
    } else {
        echo "The number is zero.";
    }

?>