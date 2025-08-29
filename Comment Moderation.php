<?php
// Step 1: Accept comment input (simulating user input)
$comment = "   This website is a SPAM link! <script>alert('hack');</script>   ";

// Step 2: Clean input
$clean_comment = trim($comment);

// Step 3: Convert to lowercase for keyword matching
$lower_comment = strtolower($clean_comment);

// Step 4: Define banned words
$banned_words = ["spam", "hack", "scam"];

// Step 5: Check for banned words
$flagged = false;
foreach ($banned_words as $word) {
    if (strpos($lower_comment, $word) !== false) {
        $flagged = true;
        break;
    }
}

// Step 6: Safely display the comment
$safe_comment = htmlspecialchars($clean_comment);

// Step 7: Output result
echo "User Comment: " . $safe_comment . "<br>";

if ($flagged) {
    echo "<span style='color:red;'>⚠️ This comment has been flagged for moderation.</span>";
} else {
    echo "<span style='color:green;'>✅ This comment is clean.</span>";
}
?>