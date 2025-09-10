<!-- Write a PHP programto include a file using include and require function. -->
 
<?php

echo "<center>";
// Include the header
include 'header.php';

// Main content
echo "<p>This is the main content of the page.</p>";

// Require the footer
require 'footer.php';

echo "</center>";

?>