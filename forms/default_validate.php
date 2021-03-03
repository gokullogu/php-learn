<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>validate form</title>
</head>

<body>
    <?php
    $name = $email = $gender = $comments = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = input_text($_POST["name"]);
        $email = input_text($_POST["email"]);
        $gender = input_text($_POST["gender"]);
        $comments = input_text($_POST["comments"]);
    }
    function input_text($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        Name :
        <input type="text" name="name">
        <br><br>
        Email :
        <input type="email" name="email">
        <br><br>
        Gender :
        male<input type="radio" name="gender" value="male">
        female<input type="radio" name="gender" value="female">
        other<input type="radio" name="gender" value="other">
        <br><br>
        comments :
        <textarea type="text" name="comments" rows="5" colums="40"></textarea>
        <br><br>
        <input type="submit" value="submit">
        <br><br>
    </form>
    <?php
    echo "<h3>your input :</h2>";
    echo "<h3>Name:</h3>" . $name;
    echo "<br>";
    echo "<h3>Email:</h3>" . $email;
    echo "<br>";
    echo "<h3>Gender:</h3>" . $gender;
    echo "<br>";
    echo "<h3>Comments:</h3>" . $comments;
    echo "<br>";
    ?>
</body>

</html>