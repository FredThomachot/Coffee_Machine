
<?php  

	$datetime = date("d-M-Y"); //Afficher la date 
	$messageAttente = "En attente...";
	$sommeInsere = 0;

	$listeBoisson =  array('Expresso', 'Double Expresso', 'Café Long', 'Cappuccino', 'Chocolat'); 

	function maListeBoisson($listeBoisson){ // Fonction qui permet d'afficher la liste des boissons en ajoutant un li
		foreach ($listeBoisson as $boisson) {
			echo "<li>$boisson</li>";
		}
	}
	


?>


<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Machine à café</title>
	<meta charset="UTF-8">
	
	
	</head>

<body>

<p>Date : <?= $datetime ?></p>
<p>Somme insérée : <?= $sommeInsere ?>€</p>
<p>Etat: <?= $messageAttente ?></p>
<p>Liste des boissons : </p>

	<ul><?= maListeBoisson($listeBoisson)?></ul>












</body>
</html>