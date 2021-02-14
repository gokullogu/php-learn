<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>functions</title>
</head>
<body>
    <?php
      //function without parameters
      //function funname(){
       //   echo "";
      //}

      function fun1(){
          echo "<p>welcome to php functions</p>";
      }
       fun1();
       echo "<p>------------------------------------------------------------------</p>";

       //function with one parameters
      function fun2($name){
        echo "<p>welcome $name</p>";
      } 
      fun2("gokul L");
    echo "<p>------------------------------------------------------------------</p>";


      //function with two parameters
      function details($name,$age){
       echo "<p>I am $name ,and I am $age years old</p>";
      }
      details("gokul",18);
    echo "<p>------------------------------------------------------------------</p>";


      //will add 5 and 10 days when not strict
      function addstr(int $str,int $num){
          return $str+$num; 
      }
       echo "<p>".addstr(5,"10 days")."</p>";
    echo "<p>------------------------------------------------------------------</p>";


    //function with default parameter
    function defpar(int $age = 18)
    {
        echo "<p>your age is $age</p>";
    }
    defpar(34);
    defpar();
    echo "<p>------------------------------------------------------------------</p>";


    //sum function
    function sum(int $num1,int $num2){
        return $num1+$num2;
    }
    echo "sum of num and num2= ".sum(130,290)."</p>";
    echo "<p>------------------------------------------------------------------</p>";


    //pass by reference changes the value of variable passed as parameters
    function ref_func(&$ref_val){
      $ref_val+=5;
    }
    $ref=4;
    ref_func($ref);
    echo "<p>value = $ref</p>";
    echo "<p>------------------------------------------------------------------</p>";

    ?>
    <?php
     
    ?>
</body>
</html>