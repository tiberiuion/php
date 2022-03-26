<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>
    <h1>Variable basics</h1>
    <?php

    // variables get declared with a dollar sign $
    // a variable name must start with a letter or underscore
    // a variable name cannot start with a number
    // a variable name can only contain alphanumeric characters and underscores
    // variable names are case sensitive
    $descriptiveVariableName = "value";
    $characterName = "Tom";
    $character = 29;

        echo "There was once a man named $characterName </br>";
        echo "He was $character years old. </br>";
    
    $characterName = "Jerry";
    // You can update a variable midway through the program.
        echo "He really liked the name $characterName </br>";
        echo "But did like being $character </br>";
    ?>
</body>
</html>