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
    <form action="get-vs-post.php" method="POST">
        Password: <input type="password" name="password">
        <input type="submit">
    </form>
    <?php
        // prints the contents of the password field
        // BUT it doesn't attach the data as a URL param
        // users can submit forms in a more secure fashion
        echo $_POST["password"]
    ?>
</body>
</html>