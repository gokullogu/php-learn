<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO</title>
</head>
<body>
    <?php 
    $servername="localhost";
    $username="root";
    $password="";
    
    try{
        $conn=new PDO("mysql:host=$servername;dbname=hoteldb",$username,$password);

        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        echo "connected successfully";
    }
    catch(PDOException $e){
        echo "connection failed : ".$e->getMessage();
    }
    $conn=null;
    ?>
</body>
</html>