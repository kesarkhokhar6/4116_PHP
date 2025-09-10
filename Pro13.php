<?php
$a = 1.234;
echo "Original Value : $a, Type : ".gettype($a);
settype($a,"integer");
echo "</br>";
echo "After casting to integer : $a, Type : " .gettype($a);

$a = 1.234;
settype($a,"float");
echo "</br>";
echo "After casting to float : $a, Type : " .gettype($a);

$a = 1.234;
settype($a,"boolean");
echo "</br>";
echo "After casting to boolean : $a, Type : " .gettype($a);

$a = 1.234;
settype($a,"string");
echo "</br>";
echo "After casting to string : $a, Type : " .gettype($a);
?>

<!--
Original Value : 1.234, Type : double
After casting to integer : 1, Type : integer
After casting to float : 1.234, Type : double
After casting to boolean : 1, Type : boolean
After casting to string : 1.234, Type : string
->