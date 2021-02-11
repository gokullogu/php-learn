<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variable scope</title>
</head>
<body>
    <?php 
     //value 1 can't be accessed outside the function 
     function myfun1(){
      $value1= 25;   
      echo "<p>value inside function = $value1</p>";
     }
     myfun1();
     echo "<p>value outside function = $value1</p>";

    //use global keyword to access the value outside of a function
    $value2=25;    
    function myfun2(){
        global $value2;
        $value2 = $value2+2;
        echo "<p>value inside function =$value2</p>";
    }
    myfun2();
    echo "<p>value outside function = $value2</p>"; 

    //using global array instead of variable names directly
    //var names inside the array as $GLOBALS['var name']
    $x=25;
    $y=90;
    function globArr(){
        $GLOBALS['x']=$GLOBALS['x']+$GLOBALS['y'];
        //echo "$GLOBALS['x']" will not work
    }
    globArr();
    echo "<p>$x</p>";

    //static variable store the variable value for ever
    function static_fun(){
       static $static_var=0;
       $static_var++;
       echo "<p>$static_var</p>"; 
    }
     static_fun();
     static_fun();
     static_fun();
    ?>
</body>
</html>