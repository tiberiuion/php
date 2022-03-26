<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Working with strings</title>
</head>
<body>
    <h1>Working with strings</h1>
    <?php
    // strings can be echoed straight out
    echo "Some string I've echoed <br>";

    // strings can be stored in a variable and that variable can be echoed
    $string = "Some other string stored in a variable </br>";

    echo $string;

    echo "<h2>String functions</h2>";
    // use functions to manipulate strings
    echo strtolower($string);
    // sets string to lowercase
    echo strtoupper($string);
    // sets string to all caps
     echo strlen($string);   
    // displays the number of characters in a string
    ?>
</body>
</html>