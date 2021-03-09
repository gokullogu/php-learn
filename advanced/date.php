<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>date</title>
</head>
<body>
    <?php 
    //date with dd/mm/yyyy l-day of week
    echo "<p>today's date :".date("d/m/Y")."<br>day :".date("l")."</p>";
    echo "<p>-------------------------------------------------------</p>";

    //time
    //date_default_timezone_set("America/New_york"); to get time of america
    echo "<p>time :".date("h:m:s a")."</p>";
    echo "<p>-------------------------------------------------------</p>";


    //mkdate to create an date
    echo "<p>date created :".date("Y-m-d h:sa",mktime(2020,03,24,3,53))."</p>";
    echo "<p>-------------------------------------------------------</p>";

    //to convert human readable to unix format
    echo "<p>date created :".date("Y-m-d-l h:m:sa",strtotime("10.30 pm April 14 2021"))."</p>";
    echo "<p>-------------------------------------------------------</p>";

    //strtotime returns tommorow's date
    echo "<p>tomorrow :".date("Y-m-d h:i:sa",strtotime("tomorrow"))."</p>";
    echo "<p>-------------------------------------------------------</p>";


    //strtotime returns next saturday
    echo "<p>next saturday :" . date("Y-m-d h:i:sa", strtotime("next saturday"))."</p>";
    echo "<p>-------------------------------------------------------</p>";


    //strtotime returns tommorow's date
    echo "<p>today+3 months :" . date("Y-m-d h:i:sa", strtotime("+3 Months"))."</p>";
    echo "<p>-------------------------------------------------------</p>";


    //prints by looping from this tuesday +6 tuesdays's
    $startdate=strtotime("tuesday");
    $enddate=strtotime("+6 weeks",$startdate); 
     
    while($startdate<$enddate){
      echo "<p>".date("M d",$startdate)."</p>";
      $startdate=strtotime("+1 week",$startdate);
    }
    echo "<p>----------------------------------------------------------</p>";

    #to print sundays in 2021
    $startsun=strtotime("sunday");
    $endsun=strtotime("+365 days",$startsun);

    while($startsun<$endsun){
      echo "<p>".date("M d Y",$startsun)."</p>";
      $startsun=strtotime("+7 days",$startsun);
    }
    echo "<p>--------------------------------------------------------------</p>";
    ?>
</body>
</html>