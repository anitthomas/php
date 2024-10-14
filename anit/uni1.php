<?php
session_start();
if(isset($_SESSION['visit_count'])){
    $_SESSION['visit_count']+=1;
}
else{
    $_SESSION['visit_count']=1;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        website visit counter
</h1>
<?php
echo "<p>you have visited this website " .$_SESSION['visit_count'] . "times.</p>";
?>
</body>
</html>