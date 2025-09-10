<!-- PHP program for print Previous semester Result using variables & constants in PHP. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>BCA MarkSheet</title>
</head>

<body>
    <center>

<?php
    //PHP code to assign the marks for each subject...
    $CS = 75;
    $ANDROID = 81;
    $ML = 93;
    $CC = 90;
    $JAVA = 89;
    $PHP = 89;
?>

    <h1><i>BSC(IT) MarkSheet</i></h1>
    <!--HTML Table code to diplay the marksheet in tabular format -->
    <table class='table table bordered'>
        <tr>
            <h3><th>Subject</th>
            <th>Marks</th></h3>
        </tr>

        <tr>
            <td>CYBER SECURITY</td>
            <td><?php echo $CS ?></td>
        </tr>

        <tr>
            <td>ANDROID</td>
            <td><?php echo $ANDROID ?></td>
        </tr>
          
        <tr>
            <td>MACHINE LEARNING</td>
            <td><?php echo $ML ?></td>
        </tr>
        
        <tr>
            <td>CLOUD COMPUTING</td>
            <td><?php echo $CC ?></td>
        </tr>
        
        <tr>
            <td>JAVA</td>
            <td><?php echo $JAVA ?></td>
        </tr>
        
        <tr>
            <td>PHP</td>
            <td><?php echo $PHP ?></td>
        </tr>

        <tr>
            <td><b>Total : </b></td>
            <!--Count the total marks... -->
            <td><?php echo $CS + $ANDROID + $ML + $CC + $JAVA + $PHP ?></td>
        </tr>

        <tr>
            <td><b>Percentage : </b></td>
            <!--Count the percentage... -->
            <td><?php echo ($CS + $ANDROID + $ML + $CC + $JAVA + $PHP) / 6 ?></td>
        </tr>
    </table>
    </center>
</body>
</html>