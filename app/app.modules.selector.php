<?php
	// Initialisation de la variable $_GET["menu"] si elle n'existe pas
	if(!isset($_GET["menu"]))
	{
		$_GET["menu"] = "";
	}

	// Sélecteur des vues (Accueil, Détail article, Espace client...)
	switch ($_GET["menu"])
	{
		case 'value':
			# code...
			break;
		
		default:
			//Page d'accueil de la boutique
			
			break;
	}
?>