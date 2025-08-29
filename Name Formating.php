<?php
// Step 1: Accept full name input
$full_name = "kESar KhokHAr";  // messy input

// Step 2: Convert entire string to lowercase
$lower_name = strtolower($full_name);

// Step 3: Split name into words
$words = explode(" ", $lower_name);

// Step 4: Capitalize each word using ucfirst()
foreach ($words as &$word) {
    $word = ucfirst($word);
}

// Step 5: Join words back together
$formatted_name = implode(" ", $words);

// Output
echo "Original Name: " . $full_name . "<br>";
echo "Formatted Name: " . $formatted_name;
?>
