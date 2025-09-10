<!--  Write a PHP program to print current month using if..else& switch case. -->
<?php 

    //uses built-in function date() , it returns the current month.
    $currentMonth = date('n');

    echo "<center>";

    //Using if-else-if statement...
    echo "<br><h2>--Using if-else statement--</h2><br>";

    if ($currentMonth==1)
        echo "This is January month.";
    elseif($currentMonth==2)
        echo "This is February month.";
    elseif($currentMonth==3)
        echo "This is March month.";
    elseif($currentMonth==4)
        echo "This is April month.";
    elseif($currentMonth==5)
        echo "This is May month.";
    elseif($currentMonth==6)
        echo "This is June month.";
    elseif($currentMonth==7)
        echo "This is July month.";
    elseif($currentMonth==8)
        echo "This is August month.";
    elseif($currentMonth==9)
        echo "This is September month.";
    elseif($currentMonth==10)
        echo "This is October month.";
    elseif($currentMonth==11)
        echo "This is November month.";
    elseif($currentMonth==12)
        echo "This is December month.";
    else
        echo "Invalid number!";

    echo "<hr>";

    //Usinng switch-case...
    echo "<h2>--Using Switch case--</h2><br>";

    switch ($currentMonth) {
        case '1':
            echo "This is January month";
            break;
        case '2':
            echo "This is February month";
            break;
        case '3';
            echo "This is March month.";
            break;
        case '4':
            echo "This is April month.";
            break;
        case '5':
            echo "This is May month.";
            break;
        case '6':
            echo "This is June month.";
            break;
        case '7':
            echo "This is July month.";
            break;
        case '8':
            echo "This is August month.";
            break;
        case '9':
            echo "This is September month.";
            break;
        case '10':
            echo "This is October month.";
            break;
        case '11':
            echo "This is November month.";
            break;
        case '12':
            echo "This is December month.";
            break;
        default:
            echo "Invalid number!";
            break;
    }
    echo "</center>";

?>