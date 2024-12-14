<?php 
    // Basic Authentication System

    // Define constants for predefined username and password
    define("USERNAME", "admin");
    define("PASSWORD", "password123");

    echo "Enter Ussername: ";
    $inputUsername = readline();

    echo "enter Password: ";
    $inputPassword = readline();

    // Authentication logic
    if ($inputUsername === USERNAME && $inputPassword === PASSWORD) {
        echo "Login successful! Welcome, " . USERNAME . ".";
    } else {
        echo "Login failed! Invalid username or password.";
    }

?>