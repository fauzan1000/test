<?php
include 'Frog.php';
include 'Ape.php';
class Animal{
    public $legs = 4;
    public $cold_blooded = "no <br>";
    public function __construct($name){$this->name= $name;}
}
$shaun = new Animal("shaun");
echo "Name : ".$shaun->name."<br>";
echo "legs : ".$shaun->legs."<br>";
echo "cold blooded : ".$shaun->cold_blooded."<br>";

$kodok = new Frog("buduk");
echo "Name : ".$kodok->name."<br>";
echo "legs : ".$kodok->legs."<br>";
echo "cold blooded : ".$kodok->cold_blooded."<br>";
echo "Jump : ";
$kodok->jump() ; // "hop hop"
echo "<br><br>";

$sungokong = new Ape("kera sakti");
echo "Name : ".$sungokong->name."<br>";
echo "legs : ".$sungokong->legs."<br>";
echo "cold blooded : ".$sungokong->cold_blooded."<br>";
echo "Yell : ";
$sungokong->yell(); // "Auooo"



?>