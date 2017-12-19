
<?php 
	include "fonctions.php"; 
	include "test.php";
	/*include "preparerboisson.php";*/
	?>


<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Machine à café</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">

	
	</head>

<body>

<div id="debutcours">
	<p>Date : <?= $datetime ?></p>
	<p>Somme insérée : <?= $sommeInsere ?>€</p>
	<p>Etat: <?= $messageAttente ?></p>
	<br>
	<!-- <p>Liste des boissons : </p>

		<ul><?= maListeBoisson($listeBoisson)?></ul>
		<br> -->

	<!-- <p>Recette des boissons : </p>

	<p>Expresso : <?= recetteExpresso(2)?></p>
	<p>Café long : <?= recetteCafeLong(3)?> </p>
	<p>Thé :  <?= recetteThe(1)?></p>
	<br> -->
<!-- </div>
<div id="choixboisson">
	<p><?= preparerBoisson("Expresso", 3) ?><p>
</div> -->

<div id="formulaire">
	<form method="post" action="preparerboisson.php">
	    <p>Choix de la boisson :</p>
	    <select name="choix" >
			<option value="Expresso">Expresso</option>
		    <option value="Café long">Café long</option>
		    <option value="Thé">Thé</option>
        </select>
        <p>Nombre de sucre(s) :</p>
			<input type="radio" name="sucre" value="0"  checked="checked" /> <label>0</label>
			<input type="radio" name="sucre" value="1" /> <label>1</label>
			<input type="radio" name="sucre" value="2" /> <label>2</label>
			<input type="radio" name="sucre" value="3" /> <label>3</label>
			<br>
			<br>
		<input type="submit" value="Valider" />
	</form>
</div>










</body>
</html>