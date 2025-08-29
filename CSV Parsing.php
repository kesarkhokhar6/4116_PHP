<?php
// Step 1: Multiple student data in CSV format
$students = [
    "Kesar,90,91,88",
    "Khushi,82,80,91",
    "Krisha,80,71,89"
];

foreach ($students as $data) {
    // Step 2: Split CSV string into array
    $parts = explode(",", $data);

    // First element is the name
    $name = $parts[0];

    // Remaining elements are scores
    $scores = array_slice($parts, 1);

    // Step 3: Calculate average
    $average = array_sum($scores) / count($scores);

    // Step 4: Create summary string
    $summary = implode(" ", [$name, "- Avg :", number_format($average, 2)]);

    // Step 5: Display
    echo $summary . "<br>";
}
?>
