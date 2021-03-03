<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array sorting</title>
</head>
<body>
    <?php
       $arr1=array(12,56,78,23,55);

       echo "<p>arr1[0] = ".$arr1[0]."</p>";

       echo "<p>--ascendingly sorted integer array---------------------------------------------------------</p>";
       sort($arr1);
       for($i=0;$i<count($arr1);$i++){
       echo "<p>arr1[$i] = ".$arr1[$i]."</p>";
       }

       echo "<p>--descendingly sorted integer array---------------------------------------------------------</p>";
       rsort($arr1);
       for ($i = 0; $i < count($arr1); $i++) {
        echo "<p>arr1[$i] = " . $arr1[$i] . "</p>";
       }


       echo "<p>--ascendingly sorted string array---------------------------------------------------------</p>";
       $arr2=array("banana","carrot","beetroot","apple","gooseberry");
       sort($arr2);
       for ($i = 0; $i < count($arr2); $i++) {
        echo "<p>arr1[$i] = " . $arr2[$i] . "</p>";
       }

       
        echo "<p>--descendingly sorted string array---------------------------------------------------------</p>";
        //$arr2 = array("banana", "carrot", "beetroot", "apple", "gooseberry");
        rsort($arr2);
        for ($i = 0; $i < count($arr2); $i++) {
            echo "<p>arr1[$i] = " . $arr2[$i] . "</p>";
        }

    echo "<p>--ascendingly sorted associative array---------------------------------------------------------</p>";
    $asarr3 = array(val1=>"banana", "carrot", "beetroot", "apple", "gooseberry");
    rsort($asarr3);
    for ($i = 0; $i < count($arr2); $i++) {
        echo "<p>arr1[$i] = " . $arr2[$i] . "</p>";
    }

    ?>
</body>
</html>