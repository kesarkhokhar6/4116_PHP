<?php
// Step 1: Accept email input
$email = "   kesar@example.com   ";  // Simulating user input with spaces

// Step 2: Clean the input
$clean_email = trim($email);

// Step 3: Concatenate with timestamp
$timestamp = time();  // current Unix timestamp
$raw_string = $clean_email . $timestamp;

// Step 4: Generate MD5 hash
$token = md5($raw_string);

// Step 5: Display the token
echo "Generated Token: " . $token . "<br>";

// Example password reset link
$reset_link = "https://example.com/reset_password.php?email=" . urlencode($clean_email) . "&token=" . $token;
echo "Password Reset Link: " . $reset_link;
?>