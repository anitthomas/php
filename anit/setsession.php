<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $_SESSION["uname"]="admin";
    $_SESSION["pwd"]="admin123";
    echo "session variables are set";
    ?>
    <h2>
        <a href="cook.php">click here</a></h2>
        <input type="button" value="button" name="logout" />
</body>
</html>