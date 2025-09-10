<?php
// Create a numeric array
$numbers = array(8, 3, 5, 1, 9, 6);

// Print original array using foreach loop
echo "Original Array:\n";
foreach ($numbers as $num) {
    echo $num . " ";
}
echo "</br>";

// Sort the array in ascending order
sort($numbers);

// Print sorted array using foreach loop
echo "Sorted Array (Ascending Order):\n";
foreach ($numbers as $num) {
    echo $num . " ";
}
?>

<!--
Original Array: 8 3 5 1 9 6
Sorted Array (Ascending Order): 1 3 5 6 8 9
->