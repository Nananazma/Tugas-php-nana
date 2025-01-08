<?php
require_once "Animal.php";
require_once "Frog.php";
require_once "Ape.php";

$sheep = new Animal("shaun", 4, "no");
$kodok = new Frog("buduk");
$sungokong = new Ape("Kera sakti");

echo $sheep->describe() . "<br>";       
echo $kodok->describe() . "<br>";      
echo $sungokong->describe() . "<br>";
?>











?>