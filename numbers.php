<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>numbers</title>
</head>
<body>
    <?php
      echo "<h2>numbers</h2>";
      
      //to find is num is int use is_int() or is_integer() or is_long()
      $num1=90;
      echo "<h4>is_int() returns bool(true) if num is int</h4>";
      echo "<p>to check the num is integer use is_int()";
      echo "<br>number = $num1 <br> is_int() = ";
      var_dump(is_int($num1));
      echo "</p><p>------------------------------------------------------------------</p>"; 
    
      //use is_float() returns bool(true) if num is float
      $num2=56.89;
      echo "<h4>is_float() returns bool(true) if the number is float()</h4>";
      echo "<p>number = $num2<br>is_float() returns ";
      var_dump(is_float($num2));
      echo "</p>";
      echo "<p>----------------------------------------------------</p>";
      
      $num3=1.9e411;
      echo "<p>number = $num3</p><br>var_dump returns data type and finite or infinite in bracket as ";
      var_dump($num3);
      echo "</p>";

      $num4="2534";
      echo "<p>number = $num4 <br>is_numeric returns true for '2534'+100,'2534' and 2534 <br>";
      var_dump(is_numeric($num4));
      echo "</p>";

      $num5="hello";
      echo "<p>number = $num5 <br> is_numeric returns ";
      var_dump(is_numeric($num5));
      echo "</p>";
    ?>
</body>
</html>