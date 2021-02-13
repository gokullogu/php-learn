<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For</title>
</head>
<body>
    <?php
    //for loop
    echo "<p>for loop</p>";
     for($num1=1;$num1<=5;$num1++){
         echo "<p>num1 = $num1</p>";
     }
     echo "<p>------------------------------------------------</p>";

     //for each loop
     echo "<p>for each loop</p>";
     $fruit=array("apple","mango","banana","gooseberry");
     foreach($fruit as $val){
        echo "<p>$val</p>";
     }
     echo "<p>------------------------------------------------</p>";

     //for each with key->value pair
     echo "<p>for each with key=>value pair</p>";
     $veg=array(1=>"brinjal",2=>"corriander",3=>"cabbage");
     foreach($veg as $key=>$val){
         echo "<p>$key=>$val</p>";
     }
     
     echo "<p>--------------------------------------------------</p>";
    ?>
</body>
</html>