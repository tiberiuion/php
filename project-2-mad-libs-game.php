<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>project 2 - Mad libs game</title>
</head>
<body>
    <h1>project 2 - Mad libs game</h1>
    <form action="project-2-mad-libs-game.php" method="GET">
        Color: <input type="text" name="colour"> </br>
        Plural Noun: <input type="text" name="pluralNoun"> </br>
        Celebrity: <input type="text" name="celebrity">  </br>
        <input type="submit">
    </form>
    <?php
    echo "Roses are {colour} <br>";
    echo "{noun plural} are blue <br>";
    echo "I love {celebrity} <br>";
    ?>
</body>
</html>