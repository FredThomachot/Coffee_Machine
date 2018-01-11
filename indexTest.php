<?php 

try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=coffeemachine;charset=utf8', 'Fred', 'luFdRcskpo4rH6my');

}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}



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
	<h1>Coffee Machine</h1>
	<p><strong>Date : </strong><?= $datetime ?></p>
	<p><strong>Somme insérée : </strong><?= $sommeInsere ?>€</p>
	<p><strong>Préparation......   </strong><?= $liste?></p>
	<br>

	
	<p><strong>Boissons : </strong> <br>

		<?php 
		// On récupère tout le contenu de la table drink
		$reponse = $bdd->query('SELECT * FROM drink');
		// On affiche chaque entrée une à une
		while ($donnees = $reponse->fetch())
		{
        ?> <br>
		<?php echo $donnees['drink_name'];
		} 
		?>
		<?php
		$reponse->closeCursor();  // Termine le traitement de la requête
		?>
		</p>

	<p><strong>Ingrédients en rupture: </strong> <br>

	    <?php
		$rupture = $bdd->query('SELECT name FROM `ingredients` WHERE stock = 0');
		
		
		while ($donnees = $rupture->fetch())
		{
        ?> <br>

        <?php echo $donnees['name']; 
        }
        ?>

		<?php
		$rupture->closeCursor();
		?> 

		</p>

	<p><strong>Recette de l'expresso : </strong> <br>

	    <?php
		$composition = $bdd->query('
			SELECT quantity, name
			FROM recipe
			INNER JOIN ingredients ON recipe.ingredients_id = ingredients.id
			WHERE drink_code = "DBL"');
		
		while ($donnees = $composition->fetch())
		{
        ?> <br>

        <?php 
        echo $donnees['name'];
        echo $donnees['quantity']; 
        }?>

		<?php
		$composition->closeCursor();
		?> 

		</p>
 







<!-- <div id="formulaire">
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
</div> -->









</body>
</html>
