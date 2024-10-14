<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="savecook.php">
        <label>Enter the username</label>
        <input type="text" name="username" required /><br><br>
        <label>Password</label>
        <input type="password" name="password" required /><br><br>
        <input type="submit" value="Submit" name="submit" />
        <input type="submit" value="Cancel" name="cancel" />
    </form>

    <?php
    session_start();

    if (isset($_POST["submit"])) {
        define("FIVE_DAYS", 60 * 60 * 24 * 5);
        setcookie("name", htmlspecialchars($_POST["username"]), time() + FIVE_DAYS, "/");
       
        $username = $_COOKIE["name"];
        echo "Cookies set successfully with the following data:";
        echo "<p>Username: $username</p>";
    }
    ?>
</body>
</html>
