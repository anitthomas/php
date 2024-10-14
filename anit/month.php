<?php
/*$mon=array(
    "January"=> "first","February"=>"second","March"=>"Third","April"=>"Fourth"
);
foreach($mon as $monname => $monvalue)
print("<p> $monname is the $monvalue month </p>");


$fruits=array("orange","Apple","Banana","Kiwi","Grapes");
rsort($fruits);
foreach($fruits as $x)
{
    echo$x;
    echo "<br>";
}

$age=array("Anu"=>"30","Apple","Ben"=>"40","Kiran"=>20,"Gigi"=>50);
asort($age);
foreach($age as $x => $x_value)
{
    echo "key=" .$x.",value=" . $x_value;
    echo "<br>";
}
*/
ages=array("Harry"=>"21","Alice"=>"20","Megha"=>"22","Bob"=>"19");
$ages["Megha"]=28;
asort($ages);
foreach($ages as $name=>$ages){

}


?>

function isPrime($number) {
    if ($number <= 1) 
    return false;
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) 
        return false;
    }
    return true;
}