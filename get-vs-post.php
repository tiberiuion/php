<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get vs post</title>
</head>
<body>
    <h1>Get vs post</h1>
    <form action="get-vs-post.php" method="get">
        Password: <input type="password" name="password">
        <input type="submit">
    </form>
    <?php
        // not only does this prints the contents of the password input
        // it also attaches that data as a URL parameter which is no bueno for passowrds
        // so in order to get info in a secure way we need to use POST in the method attribute above.
        echo $_GET["password"]
    ?>
</body>
</html>