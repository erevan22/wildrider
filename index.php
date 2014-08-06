<?php
	//session_start();
	
	/* 
	Require des fichiers :
		app.config.php 		=> Connecteur de DB : $db_link
		app.parametres.php	=> Variables à utiliser
	*/
	require("sources/config/app.config.php");
	require("sources/config/app.parametres.php");
	
	if(isset($_GET["menu"]))
	{
		$menu = $_GET["menu"];
	}
	else
	{
		$menu = "accueil";
	}

	require("app/app.skeleton.php");
?>