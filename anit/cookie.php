<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    $cookie_name ="user";
    $cookie_value ="admin123";
    setcookie($cookie_name,$cookie_value,time()+(86400*30),"/")
    ?>
</head>
<body>
   <?php
    if(!isset($_COOKIE[$cookie_name]))
    {
        echo "Cookie named " . $_cookie_name."is not set!";
    }else{
        echo "cookie $cookie_name is set!<br>";
        echo "value is:".$_COOKIE[$cookie_name];
    }
    ?>
</body>
</html>