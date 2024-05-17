<?php require 'index.php';
$sheep = new Animal("shaun");

echo $sheep->name."<br>"; // "shaun"
echo $sheep->legs."<br>"; // 4
echo $sheep->cold_blooded; // "no"


?>