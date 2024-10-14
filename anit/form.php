<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Please log in here</h1>
        <?php
        $error = ''; // Initialize $error
        if (isset($_POST['submit'])) {
            if (empty($_POST['username']) || empty($_POST['password'])) {
                $error = 'Please enter username and password';
            } else {
                $username = $_POST['username'];
                $password = $_POST['password'];
                if ($username == 'admin' && $password == 'admin123') {
                    header('Location: welcome2.php');
                    exit();
                } else {
                    $error = 'Invalid username or password';
                }
            }
        }

        if (isset($_POST['cancel'])) {
            header('Location: login.php');
            exit();
        }

        if ($error) {
            echo '<div style="color:red;">' . htmlspecialchars($error) . '</div>';
        }
        ?>

        <form method="POST"> <!-- Changed method to POST -->
            <label>Enter the username</label>
            <input type="text" name="username" /><br><br>
            <label>Password</label>
            <input type="password" name="password" /><br><br>
            <input type="submit" value="Submit" name="submit" /> <!-- Changed type to submit -->
            <input type="submit" value="Cancel" name="cancel" /> <!-- Changed type to submit -->
        </form>
    </div>
</body>
</html>
