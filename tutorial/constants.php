<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>constants</title>
</head>
<body>
    <?php 
    //case-insensitive is false by default
    define("GREETING","<p>welcome all !</p>");
    echo("<p>greeting constant : ".GREETING."</p>");
    echo "-----------------------------------";

    //case-insensitive is made by true by
    define("about","<p>I am an developer</p>",true);
    echo("<p>about constant : ".ABOUT."</p>");
    echo "-----------------------------------";

    //array as constant
    define("vehicles",["cycle","bike","car","truck"]);
    echo "<p>array vehicle constant : ".vehicles[1]."</p>";
    echo "-----------------------------------";


    //constants are global
    function constfun(){
        echo "<p> about constant accessed from function : ".about."</p>";
    }
    constfun();
    echo "-----------------------------------";
    ?>
</body>
</html>