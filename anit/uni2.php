<?php
session_start();
$errorMessage = "";

if (isset($_POST['submit'])) {
    // Check if both fields are not empty
    if (!empty($_POST['myUname']) && !empty($_POST['myPass'])) {
        $inputUname = $_POST['myUname'];
        $inputPass = $_POST['myPass'];

        // Check for correct credentials
        if ($inputUname == "admin" && $inputPass == "admin123") {
            $_SESSION["uname"] = $inputUname;
            header("Location: wlcome1.php");
            exit();
        } else {
            $errorMessage = "Incorrect username and password";
        }
    } else {
        $errorMessage = "Enter username and password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <?php
    if (!empty($errorMessage)) {
        echo "<p style='color:red;'>$errorMessage</p>";
    }
    ?>
    <form method="POST" action="testform1.php"> 
        <label>Enter the username</label>
        <input type="text" name="myUname" /><br><br>
        <label>Password</label>
        <input type="password" name="myPass" /><br><br>
        <input type="submit" value="Submit" name="submit" /> 
        <input type="submit" value="Cancel" name="cancel" /> 
    </form>
</body>
</html>
