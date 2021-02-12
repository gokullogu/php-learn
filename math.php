<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>math functions</title>
</head>
<body>
 <?php
    //pi() returns the pi Value
    echo "<p> pi value = ".pi()."</p>";

    //max() returns maximum number 
    echo "<p>maximum value = ".max(12,23,22,-12,0,56)."</p>";

    //min value returns minimum number
    echo "<p>minimum value = ".min(25,3,45,10,12,-45)."</p>";

    //abs() returns absolute value of a number
    echo "<p>absolute value =".abs(-34)."</p>";

    //sqrt() returns square root of a number
    echo "<p>square root of a number = ".sqrt(225)."</p>";

    //round() returns floating to nearest int 
    echo "<p>round = ".round(4.6)."</p>";
    echo "<p>round = ".round(4.2)."</p>";

    //random numbers
    echo "<p>random number = ".rand()."</p>";

    //rand between 1 and 100
    echo "<p>random number between 1 and 100 = ".rand(1,100)."</p>"
   ?>
</body>
</html>