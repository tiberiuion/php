<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getting user input</title>
</head>
<body>
    <h1>Getting user input</h1>
    <form action="getting-user-input.php" method="get">
        Name: <input type="text" name="name">
        <br>
        Age: <input type="number" name="age">
        <input type="submit">
    </form>
    
    Your name is<?php echo $_GET["name"]; //prints out the value submitted by the user in the name input?>
    <br>
    You are <?php echo $_GET["age"]; //prints out the value submitted by the user in the name input?> years old.
</body>
</html>