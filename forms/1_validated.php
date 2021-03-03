<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>validated 1</title>
     
    <style>
        .error{
            color:#FF0000;
        }
    </style>
</head>

<body>
    <?php
    $name = $email = $gender = $comments = $website = "";
    $name_err = $email_err = $gender_err = $website_err = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $name_err = "* name is required";
        } else {
            $name = test_inp($_POST["name"]);
        }


        if (empty($_POST["email"])) {
            $email_err = "* email is required";
        } else {
            $email = test_inp($_POST["email"]);
        }

        if (empty($_POST["gender"])) {
            $gender_err = "* gender is required";
        } else {
            $gender = test_inp($_POST["gender"]);
        }

        if (empty($_POST["comments"])) {
            $comments_err = "";
        } else {
            $comments = test_inp($_POST["comments"]);
        }


        if (empty($_POST["website"])) {
            $website_err = "";
        } else {
            $website = test_inp($_POST["website"]);
        }
    }
    function test_inp($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <p><span class="error">* required field</span></p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        Name :
        <input type="text" name="name">
        <span class="error"><?php echo $name_err;?></span>
        <br><br>

        Email :
        <input type="email" name="email">
        <span class="error"><?php echo $email_err;?></span>
        <br><br>

        Gender :
        <input type="radio" name="gender" value="Male">Male
        <input type="radio" name="gender" value="Female">Female
        <input type="radio" name="gender" value="other">Other
        <span class="error"><?php echo $gender_err;?></span>
        <br><br>

        Website :
        <input type="text" name="website">
        <span class="error"><?php echo $website_err;?></span>
        <br><br>

        Comments :
        <textarea name="comments" rows="5" cols="40"></textarea>
        <br><br>

        <input type="submit" value="submit">
        <br><br>
    </form>
    <?php
    echo "<h3>form with php validation</h3>";
    echo "<br>";
    echo "<h3>Name : </h3>".$name;

    echo "<br>";
    echo "<h3>Email : </h3>".$email;

    echo "<br>";
    echo "<h3>Gender : </h3>".$gender;

    echo "<br>";
    echo "<h3>Website : </h3>".$website;

    echo "<br>";
    echo "<h3>Comments : </h3>".$comments;
    ?>
</body>

</html>