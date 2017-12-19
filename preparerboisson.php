<?php 

include "fonctions.php";

$getBoisson = $_POST['choix'];
$getSugar = $_POST['sucre'];

echo preparerBoisson($getBoisson, $getSugar);


?> 

