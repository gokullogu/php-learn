<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php
      //array declaration
      echo "<h3>array</h3>";
      $arr1=array(12,24,36,40);
      echo "<p>---------------------------------------------------</p>";

      //count the number of array elements
      echo "<p>count counts the number of elements in the array</p>";
      $c=count($arr1);
      echo "<p>$c</p>";
      echo "<p>---------------------------------------------------</p>";


      //array
      echo "<p>displaying array</p>";
      echo "<p>".$arr1[0]."</p>";
      echo "<p>---------------------------------------------------</p>";


      echo "loop to display array";
      for($num=0;$num<$c;$num++){
         echo "<p>$arr1[$num]</p>";
      }
      echo "<p>---------------------------------------------------</p>";


      //associative array
      $assarr=array("name"=>"gokul","age"=>18,"place"=>"pollachi");
      echo "<p>accessing element from associative array = ".$assarr['place']."</p>";
      echo "<p>---------------------------------------------------</p>";



      //looping through an associative array
    foreach($assarr as $key=>$val){
      echo "<p>key is ".$key.", value is ".$val."</p>";
    }
    echo "<p>---------------------------------------------------</p>";


      //multi dimentional array
      $mularr=array(array(1,2,3),array(2,4,6),array(3,6,9));

      for($mulm=0;$mulm<3;$mulm++){
        echo "<p>m = ".$mulm."</p>";
        echo "<ul>";
        for($muln=0;$muln<3;$muln++){
          echo "<p>n = ".$mularr[$mulm][$muln]."</p>";
        }
        echo "</ul>";
      }
      echo "<p>---------------------------------------------------</p>";

    ?>
</body>
</html>