<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data types</title>
</head>

<body>
    <?php
    //string "sequence of characters"
    $str = 'hello world';
    echo "<p>string = " . $str . "</p>";
    var_dump($str);
    echo "<p>---------</p>";

    //integer "2147483648 to 2147483647"
    $integer_num = 25;
    echo "<p>integer = " . $integer_num . "</p>";
    var_dump($integer_num);
    echo "<p>---------</p>";

    //floating 
    $float_num = 25.56;
    echo "<p>floating number = " . $float_num . "</p>";
    var_dump($float_num);
    echo "<p>---------</p>";

    //boolean
    $boolean_num = true;
    echo "<p>boolean number = " . $boolean_num . "</p>";
    var_dump($boolean_num);
    echo "<p>---------</p>";
    ?>
</body>

</html>