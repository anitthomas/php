<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pattern checker</h1>
    <form name="form1" method="post">
       Enter a string:
       <input type="text" name="inputString"/>
       Enter the pattern:
        <input type="text" name="myPattern" />
        <button type="submit" name="submit">Search myPattern in My String</button>
    </form>
</body>
<?php
if(isset($_POST["submit"])){
    $inputString =$_POST['inputString'];
    $inputString =$_POST['MyPattern'];
    $pattern ='/' . $pattern . '/';
if(preg_match($pattern ,$string)){
    echo "<br> Pattern $pattern found in $string.<br>";
}
else{
    echo "<br> pattern $pattern not found in $string.<br>";
}
}
?>
</html>
    