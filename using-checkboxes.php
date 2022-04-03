<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using checkboxes</title>
</head>
<body>
    <h1>Using checkboxes</h1>
    <form action="using-checkboxes.php" method="POST">
        Apples: <input type="checkbox" name="fruits[]" value="apples"> <br>
        Oranges: <input type="checkbox" name="fruits[]" value="oranges"> <br>
        Pears: <input type="checkbox" name="fruits[]" value="pears"> <br>
        <input type="submit">
    </form>
    <?php
        // define fruits array and get it on submission via POST method
        $fruits = $_POST["fruits"];

        // print out the second item that was ticked
        echo $fruits[1];
    ?>
</body>
</html>