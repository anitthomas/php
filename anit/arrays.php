<?php
$mon = array('january','february','march');
$elementToRemove = 'march';
$index=array_search($elementToRemove,$mon);
if ($index !==false)
{
    unset($mon[$index]);
}
var_dump($mon)

?>