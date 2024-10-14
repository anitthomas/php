<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Prime Number Checker</h1>
    <form method="post" action="">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <button type="submit" name="submit">Check</button>
    </form>
    
    <?php
    function isPrime($number) {
        if ($number <= 1) {
            return false; 
        }
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return false; 
            }
        }
        return true; 
    }

    if (isset($_POST["submit"])) {
        $number = (int)$_POST['number'];
        if (isPrime($number)) {
            echo "<p>$number is a prime number.</p>";
        } else {
            echo "<p>$number is not a prime number.</p>";
        }
    }
    ?>
</body>
</html>
