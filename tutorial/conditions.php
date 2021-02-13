<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conditional statements</title>
</head>
<body>
    <?php 
    $t1=date("H");
    echo $t1;

    //if
    echo "<h2>if</h2>";
    if($t1<"20"){
       echo "<p>Have a good day</p>";
    }
    echo "<p>--------------------------------------------</p>";

    //ifelse
    echo "<h2>if else</h2>";
    if($t1<"18"){
        echo "<p>have a good day</p>";
    }
    else{
        echo "<p>have a good night</p>";
    }
    echo "<p>--------------------------------------------</p>";

    //elseif
    echo "<h2>else if</h2>";
    if($t1<"10"){
        echo "<p>good morning</p>";
    }
    elseif($t1<"20"){
        echo "<p>good evening</p>";
    }
    else{
        echo "<p>good night</p>";
    }
    echo "<p>--------------------------------------------</p>";

    echo "<h2>switch case</h2><p>";
    $name="gokul";
    switch($name){
     case "ram":
        echo "welcome ram!";
        break;
     case "tharun":
        echo "welcome tharun !";
        break;
     case "gokul":
        echo "welcome gokul";
        break;
     default:
      echo "welcome new user";
      break;         
    }
   echo "</p>";


    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];
    echo "<br>";
    echo $_SERVER['HTTP_REFERER'];
    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT'];
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME'];

    
    ?>
</body>
</html>