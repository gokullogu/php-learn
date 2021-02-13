<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>strings</title>
</head>
<body>
    <?php 
    //length of the string
    $string1="gokul";
    echo "<p>string : $string1 <br> length of string : ".
                              strlen($string1)."</p>";
    echo "<p>______________________________________________________________________________</p>";

    //str_word_count
    $string2="hello world";
    echo "<p>string : hello world <br>str_word_count prints the number
                of words in a string : ".str_word_count($string2)."</p>";
    echo "<p>______________________________________________________________________________</p>";

    //strrev reverse the string
    $string3 = "welcome to php";
    echo "<p>string : welcome to php <br>strrev prints the reverse
                of given a string : " . strrev($string3) . "</p>";
    echo "<p>______________________________________________________________________________</p>";

    //strpos returns the char pos of first letter of searched word
    $string4 = "welcome to php";
    echo "<p>string : welcome to php <br>key : php <br>strpos prints the char pos of first letter
    of searched word  : " . strpos($string3,"php") . "</p>";
    echo "<p>______________________________________________________________________________</p>";

    //replace replaces new char in the place of existing char in a line
    $string4="hello world";
    echo"<p>string : hello world <br>str_replace()
         replaces the new char in the place of existing 
         char in the word : ".str_replace("world"," ! welocme all",$string4)."</p>";

    echo "<p>______________________________________________________________________________</p>";     
    ?>
</body>
</html>