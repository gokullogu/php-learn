<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>introduction</title>
</head>
<body>
    <?php
     $servername ="localhost";
     $username="root";
     $password="";
     

     $conn=new mysqli($servername,$username,$password);
     
     if($conn->connect_error){
         die("connection failed :".$conn->connect_error);
     }
     $conn->close();
    ?>
</body>
</html>