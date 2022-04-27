<?php 
require 'chien.php';

$nom = $_POST["nom"];
$age = $_POST["age"];
$race = $_POST["race"];

$nom1 = $_POST["nom1"];
$age1 = $_POST["age1"];
$race1 = $_POST["race1"];

$nom2 = $_POST["nom2"];
$age2 = $_POST["age2"];
$race2 = $_POST["race2"];



$gena = new chien ("$nom","$age","$race");
$ouchka = new chien ("$nom1","$age1","$race1");
$orphea = new chien ("$nom2","$age2","$race2");


$gena->affiche();
$ouchka->affiche();
$orphea->affiche();
?>