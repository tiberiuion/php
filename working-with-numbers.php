<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Working with numbers</title>
</head>
<body>
    <h1>Working with numbers</h1>
    <?php
    // print out a numebr positive or negative
    echo 40;
    echo "<hr>";
    echo -40;
    echo "<hr>";

    // print decimal (floaiting point numbers)
    echo 40.47;
    echo "<hr>";

    // you can do arithmetic: addition +, subtration -, multiplication *, division /
    echo 5.3 + 9;
    echo "<hr>";

    // modulus operator - it divides the first number by the second one and returns the remaider
    // you read the following as "10 mod 3"
    echo 10 % 3;
    echo "<hr>";
    // order of operations - same as the normal math order of operation
    echo 4 + 5 * 10; // multiplication gets resolved first: 4 + 50 = 54
    echo "<hr>";
    echo ( 4 + 5 ) * 10; // parenthesis gets resolved first then the multiplication: 9 *  10 = 90
    echo "<hr>";
    // store a number in a variable
    $num = 10;
    echo $num; // 10
    echo "<hr>";
    // increment a number in a variable
    $num++;
    echo $num; // 11
    echo "<hr>";
    // decrement a number in a variable
    $num--;
    echo $num; // 10
    echo "<hr>";

    // add a number on to the variable
    $num = $num + 25; // 35
    echo $num;
    echo "<hr>";
    // shorthand version of the above
    $num += 25; // 60
    echo $num;
    echo "<hr>";
    // same shorthand works for subtraction, division, multiplication etc.
    $num -= 35; // 25
    echo $num;
    echo "<hr>";
    $num *= 2; // 50
    echo $num;
    echo "<hr>";
    $num /= 2; // 25
    echo $num;
    echo "<hr>";

    //find absolute value of a number
    echo abs(-100); // slightly unclear what this does, probably not the best example
    echo "<hr>";
    echo abs(3.4);
    echo "<hr>";
    // raise 2 to the power of 4
    echo pow(2, 4); // 16
    echo "<hr>";
    // get square root of a number
    echo sqrt(81); //  9
    echo "<hr>";
    // returns the biggest number 
    echo max(2, 10); //10
    echo "<hr>";
    // returns the smallest number
    echo min(2, 10); // 2
    echo "<hr>";
    // rounding numbers - rounds number based on standard rounding rules
    echo round(3.2); // 3
    echo "<hr>";
    // rounds up a number no matter what
    echo ceil(3.2); // 4
    echo "<hr>";
    //rounds down a number no matter what
    echo floor(3.6) // 3
    ?>
</body>
</html>