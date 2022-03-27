<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic calculator</title>
</head>
<body>
    <h1>Basic calculator</h1>
    <!-- set up from with action attribute set to namge of file and methos set to GET -->
    <form action="project-1-basic-calculator.php" method="GET">
        <!-- set up input fields -->
        <input type="number" name="num1">
        <input type="number" name="num2">
        <input type="submit">
    </form>
    <?php
    // echo the sum of the two numbers
    Answer: echo $_GET["num1"] + $_GET["num2"];
    ?>
    <!-- note: when submitting the input values get displayed in the address bar.
    Changing these alters the result. -->
</body>
</html>