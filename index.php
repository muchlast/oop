<?php

require ('Animal.php');
require ('Frog.php');
require ('Ape.php');

$sheep = new Animal("Shaun");
echo $sheep->name;
echo "<br>";
echo $sheep->legs;
echo "<br>";
var_dump ($sheep->cold_blooded);

echo "<br>";
$kodok = new Frog("buduk");
$kodok->jump() ; // "hop hop"
echo "<br>";
echo $kodok->name;

echo "<br>";
$sungokong = new Ape("kera sakti");
$sungokong->yell(); // "Auooo"
?>