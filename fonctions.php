<?php  

	$datetime = date("d-M-Y"); //Affiche la date du jour
	$messageAttente = "En attente..."; // variable qui affiche un message
	$sommeInsere = 0;

	$listeBoisson =  array('Expresso', 'Café Long', 'Thé'); //tableau avec la liste des boissons

	function maListeBoisson($listeBoisson){ // Fonction qui permet d'afficher la liste des boissons en ajoutant un li
		foreach ($listeBoisson as $boisson) {
			echo "<li>$boisson</li>";
		}
	}

	
// Fonctions qui affichent les ingrédients des boissons avec une variable sucre

	function recetteExpresso($nbSucre){
		return "1 dose de café, 1 dose d'eau, ".$nbSucre." sucre(s)";
	}
	
	function recetteCafeLong($nbSucre){
		return "2 doses de café, 2 doses d'eau, ".$nbSucre." sucre(s)";
	}
	
	function recetteThe($nbSucre){
		return "1 dose de thé, 3 doses d'eau, ".$nbSucre." sucre(s)";
	}



// Fonction qui appelle les fonctions précédentes (recettes)

	function preparerBoisson($nomBoisson, $nbSucre){
		switch ($nomBoisson) {
			case 'Expresso':
				echo $nomBoisson." : ".recetteExpresso($nbSucre);
				break;
			case 'Café long':
				echo $nomBoisson." : ".recetteCafeLong($nbSucre);
			   break;
			case 'Thé':
			    echo $nomBoisson." : ".recetteThe($nbSucre);
			default:
				echo "Selection invalide";
		}
	}







	


?>



