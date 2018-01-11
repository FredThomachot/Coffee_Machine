<?php  

function connectionBdd(){
	try {
		$bdd = new PDO('mysql:host=localhost;dbname=coffeemachine;charset=utf8', 'Fred', 'luFdRcskpo4rH6my');
	}
	catch(Exception $e) {
		die('Erreur : '.$e->getMessage());
	}
	return $bdd;
}

connectionBdd();

    $datetime = date("d-M-Y"); //Affiche la date du jour
	$messageAttente = "En attente..."; // variable qui affiche un message
	$sommeInsere = '0,00';



	


	
function listeBoisson(){
		$bdd = connectionBdd();
		$reponse = $bdd->query('SELECT * FROM drink');
        while ($donnees = $reponse->fetch());
		{
        echo $donnees['drink_name'];
		} 
		 
		
}


		


 	

	





	/*$listeBoisson =  array('Expresso', 'Café Long', 'Thé'); //tableau avec la liste des boissons

	function maListeBoisson($listeBoisson){ // Fonction qui permet d'afficher la liste des boissons en ajoutant un li
		foreach ($listeBoisson as $boisson) {
			echo "<li>$boisson</li>";
		}
	}*/



// Fonction qui appelle les fonctions précédentes (recettes)

	/*function preparerBoisson($nomBoisson, $nbSucre){
		switch ($nomBoisson) {
			case 'Expresso':
				return $nomBoisson." : ".recetteExpresso($nbSucre);
				break;
			case 'Café long':
				return $nomBoisson." : ".recetteCafeLong($nbSucre);
			    break;
			case 'Thé':
			    return $nomBoisson." : ".recetteThe($nbSucre);
			    break;
			default:
				return "en attente...";
		}
	}*/


	

	



?>



