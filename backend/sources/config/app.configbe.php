<?php
	/**
	*	Paramètres de connexion
	*	Création : 05/08/2014
	*	Stephan GIULIANI
	*/

	/* Récupération du fichier paramètres */
	require("app.parametresbe.php");

	/* Connexion base de données */
	$db_name       = "wildrider";
	$db_user       = "root";
	$db_password   = "troiswa";

		
	//Test sur serveur (Développement / Production)
	if($_SERVER['SERVER_NAME'] == "127.0.0.1" || substr($_SERVER['SERVER_NAME'], 0 ,8) == "192.168.")
	{
		//Serveur de développement
		$db_host = "localhost";
	}
	else
	{
		//Serveur de production
		$db_host = "";
	}
	
	//Connecteur de base de données
	$db_link = mysqli_connect($db_host, $db_user, $db_password, $db_name) OR die($db_connexion_error);
?>
