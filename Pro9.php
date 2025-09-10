<?php
// Numeric array for Monday to Saturday
$days = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");

// Associative array for months with the total days of each month
$months = array(
    "January" => 31,
    "February" => 28,
    "March" => 31,
    "April" => 30,
    "May" => 31,
    "June" => 30,
    "July" => 31,
    "August" => 31,
    "September" => 30,
    "October" => 31,
    "November" => 30,
    "December" => 31
);

// Multidimensional array for laptops with company name, model, and price
$laptops = array(
    array(
        "Company" => "Dell",
        "Model" => "XPS 13",
        "Price" => 1200
    ),
    array(
        "Company" => "HP",
        "Model" => "Spectre x360",
        "Price" => 1500
    )
);

// Displaying the arrays
echo "Numeric Array (Days):\n";
print_r($days);

echo "\nAssociative Array (Months and Days):\n";
print_r($months);

echo "\nMultidimensional Array (Laptops):\n";
print_r($laptops);
?>
