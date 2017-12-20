<?php 

include "fonctions.php";

$getBoisson = $_POST['choix'];
$getSucre = $_POST['sucre'];

echo preparerBoisson($getBoisson, $getSucre);




?> 

