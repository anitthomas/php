<?php
/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
$conn = mysqli_connect($servername , $username ,$password ,$dbname);
if($conn){
    echo "Connected to  " .$dbname . "  established successfully";
}
else{
    die("Connection faild:" .mysqli_connect_error());
}*/
if(isset($_POST['submit'])) {
$conn = new mysqli("localhost" , "root" , "" ,"test");
if($conn){
   echo "Connected to DB established successfully";
   {
    $sql="INSERT INTO testtable (testfield)
     VALUES('$_POST[testfield]')";
    $res = mysqli_query($conn,$sql);
    if($res){
        echo '<br> Data Inserted successfully';
    }
    else{
        die("Error:".mysqli_error($conn));
    }
   }
}
else{
   die("Connection failed:" . mysqli_connect_error());
}mysqli_close($conn);
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
    <form action ="" method="post">
        <p><label>Text to add:</label><br>
        <input type="text" name="testfield" size="30"/></p>
        <input type="submit" name="submit" value="insert Record"/>
</form>
</body>
</html>