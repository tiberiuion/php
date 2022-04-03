<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <h1>Arrays</h1>
    <?php
        // define an array just like any other variable
        // $varname = array(index 1, index 2, index 3)
        $friends = array("Mike", "Jill", "Gavin", "Mary");

        // access the array using the index of the value
        // $arrayname[index]
        // indexing starts at 0
        echo $friends[1]; // Jill
        echo "<br>";

        // array values can be modified on the fly
        $friends[0] = "Leigh";
        echo $friends[0]; // Leigh
        echo "<br>";

        // displays the number of items in an array
        echo count($friends); // 4
        echo "<br>";


        // values can be added to the array
        $friends[4] = "Jack";
        
        echo $friends[4];
        echo "<br>";

    ?>
</body>
</html>