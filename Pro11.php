<?php
echo "Array Change Key Case<br>";
$a1 = array("Peter"=>"32", "Ben"=>"35", "Joe"=>"43");
print_r(array_change_key_case($a1,CASE_UPPER));
print_r(array_change_key_case($a1,CASE_LOWER));

echo "<br>Array Chunk<br>";
$cars = array("Volvo","BMW","Toyota","Honda","Mercedes");
print_r(array_chunk($cars,2));

echo "<br>Array Count Values<br>";
$a = array("A","B","B","Peacock");
print_r(array_count_values($a));

echo "<br>Array Combine<br>";
$fname = array("Peter","Ben","Joe");
$age = array("35","37","43");
$com = array_combine($fname,$age);
print_r($com);

echo "<br>Array Pop<br>";
$a = array("red","green","blue");
array_pop($a);
print_r($a);

echo "<br>Array Push<br>";
$a = array("red","green");
array_push($a,"yellow","blue","pink");
print_r($a);

echo "<br>Array Shift<br>";
$a = array("a"=>"red","b"=>"green","c"=>"blue");
echo array_shift($a);
echo "\n";
print_r($a);

echo "<br>Array Unshift<br>";
$a = array("a"=>"red","b"=>"green");
echo array_unshift($a,"blue");
echo "\n";
print_r($a);

?>

<!--
Array Change Key Case<br>Array
(
    [PETER] => 32
    [BEN] => 35
    [JOE] => 43
)
Array
(
    [peter] => 32
    [ben] => 35
    [joe] => 43
)
<br>Array Chunk<br>Array
(
    [0] => Array
        (
            [0] => Volvo
            [1] => BMW
        )

    [1] => Array
        (
            [0] => Toyota
            [1] => Honda
        )

    [2] => Array
        (
            [0] => Mercedes
        )

)
<br>Array Count Values<br>Array
(
    [A] => 1
    [B] => 2
    [Peacock] => 1
)
<br>Array Combine<br>Array
(
    [Peter] => 35
    [Ben] => 37
    [Joe] => 43
)
<br>Array Pop<br>Array
(
    [0] => red
    [1] => green
)
<br>Array Push<br>Array
(
    [0] => red
    [1] => green
    [2] => yellow
    [3] => blue
    [4] => pink
)
<br>Array Shift<br>red
Array
(
    [b] => green
    [c] => blue
)
<br>Array Unshift<br>3
Array
(
    [0] => blue
    [a] => red
    [b] => green
)
-->