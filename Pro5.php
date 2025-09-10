<!-- Write a PHP programto print 5 to 10 using For and ForEach. -->

<?php

    echo "<center>";

    echo "<h1><br> --- For loop --- </h1>";
    for($i=5; $i<=10; $i++)
        echo "<h3>". $i . "</h3>";

    echo "<hr>";

    echo "<h1> --- ForEach loop --- </h1>";
    $numbers = range(5,10);
    foreach($numbers as $num)
        echo "<h3>". $num . "</h3>";

    echo "</center>";

?>