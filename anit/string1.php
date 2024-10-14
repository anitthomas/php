<?php
$string = "Computer";
$pattern = "/put/";

if (preg_match_all($pattern,$string,$match)){
    echo "count ( $match [ 0])./n";
}
else{
    echo "Pattern $pattern not found in $string,/n";
}
?>