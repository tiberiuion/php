<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL parameters</title>
</head>
<body>
    <h1>URL parameters</h1>
    <form action="url-parameters.php" action="get">
        Name: <input type="text" name="name"> <br>
        <input type="submit">
    </form>
    <?php
        // prints the contents of the name field, nothing fancy
        // also the input filed content gets added to the URL as a parameter i.e. domain.name?url=parameter
        //the question mark is the delimited between the path and the URL parameters 
        echo $_GET['name'];
    ?>
</body>
</html>