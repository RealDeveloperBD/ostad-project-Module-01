<?php
    // Simple Electricity Bill Calculator

    echo "Enter Units You Consumed: ";
    $units = (int)readline();

    // Billing logic based on slabs
    if ($units <= 100) {
        $totalBill = $units * 5; // $5 per unit for 1–100 units
    } elseif ($units <= 200) {
        $totalBill = (100 * 5) + (($units - 100) * 10); // $5 for first 100, $10 for next 101–200 units
    } else {
        $totalBill = (100 * 5) + (100 * 10) + (($units - 200) * 15); // $5 for first 100, $10 for next 101–200, $15 above 200 units
    }

    // Display the total bill
    echo "Electricity Bill is: $$totalBill";
?>