<?php
// Temperature Converter

// Define constants for conversion formulas
define("FACTOR", 9/5);
define("OFFSET", 32);

// Ask user for input temperature and conversion type
echo "Enter the temperature value: ";
$temperature = (float)readline();
echo "Choose conversion type: (1: Fahrenheit, 2: Celsius): ";
$Choice = (int)readline();

// Conversion logic using a switch statement
switch ($Choice){
    case 1:
        $result = ($temperature * FACTOR) + 32; // Formula: (C × 9/5) + 32
        echo "Temperature In Fahrenheit: $result";
        break;

    case 2:
        $result = ($temperature - OFFSET) * 5/9; // Formula: (F − 32) × 5/9
        echo "Temperature In Celsius: $result";
        break;
        
        
    default:
        echo "Invalid conversion type.";
        break;
}
?>
