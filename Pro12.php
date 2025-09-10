<?php
$str = "Hello World!";
echo "strlen : ".strlen($str);
echo "<br>";
echo "strpos : ".strpos("Hello","o");
echo "<br>";
echo "str_word_count : ".str_word_count("Hello World!");
echo "<br>";
echo "strrev : ".strrev("Students!");
echo "<br>";
echo "str_replace : ".str_replace("My","Hello","My dear student");
echo "<br>";
echo "strtolower : ".strtolower($str);
echo "<br>";
echo "strtoupper : ".strtoupper($str);
?>

<!--
strlen : 12
strpos : 4
str_word_count : 2
strrev : !stnedutS
str_replace : Hello dear student
strtolower : hello world!
strtoupper : HELLO WORLD!
->