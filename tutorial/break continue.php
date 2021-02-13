<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>break/continue</title>
</head>
<body>
<?php
  //break
  echo "<p>break</p>";
  $num1=0;
  while($num1<10){
      if($num1==6){
        break;
      }
      echo "<p>$num1</p>";
      $num1++;
    }  

    //continue
    $num2=0;
    while($num2<10){
      if($num2==5){
         $num2++; 
         continue;
      }
      echo "<p>$num2</p>";
      $num2++;
    }
  ?>
</body>
</html>