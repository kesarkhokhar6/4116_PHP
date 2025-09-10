<!-- Write a PHP program to print 15 to 20 using While and Do While. -->

<?php

    echo "<center>";

    $num = 15;
    echo "<h1><br> --- While loop --- </h1>";
    while($num<=20){
        echo "<h3>". $num . "</h3>";
        $num++;
    }
    echo "<hr>";

    $num = 15;
    echo "<h1> --- Do While loop --- </h1>";
    do{
        echo "<h3>". $num . "</h3>";
        $num++;
    }while($num<=20);

    echo "</center>";

?>