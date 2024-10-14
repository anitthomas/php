<?php
$array1=array('a','1','2','3','4');
$array2=array('a','3');

if (array_intersect($array2,$array1)===$array2){
    echo "<br> It is a subset <br>";
}
else{
    echo "Not a subset";
}


?>