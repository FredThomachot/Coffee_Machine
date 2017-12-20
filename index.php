
<?php 
	include "fonctions.php"; 

	$liste = "en attente" ;

	if(isset($_POST['choix']) && isset($_POST['sucre'])){
		$liste = preparerBoisson($_POST['choix'], $_POST['sucre']);
	}
	
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
	<p><strong>Date : </strong><?= $datetime ?></p>
	<p><strong>Somme insérée : </strong><?= $sommeInsere ?>€</p>
	<p><strong>Préparation......   </strong><?php echo $liste?></p>
	<br>

	

<div id="formulaire">
	<form method="post" action="index.php">
	    <p>Choix de la boisson :</p>
	    <select name="choix" >
			<option value="Expresso">Expresso</option>
		    <option value="Café long">Café long</option>
		    <option value="Thé">Thé</option>
        </select>
        <p>Nombre de sucre(s) :</p>
			<input type="radio" name="sucre" value="0" /> <label>0</label>
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