<?php
	//session_start();
	
	/* 
	Require des fichiers :
		app.config.php 		=> Connecteur de DB : $db_link
		app.parametres.php	=> Variables à utiliser
	*/
	require("sources/config/app.config.php");
	require("sources/config/app.parametres.php");
	
	/* Fonction de construction du menu */
	function item_menu($keywordhref, $label, $cssclass){
		echo "<li class=\"".$cssclass."\"><a href=\"".$keywordhref."\">".$label."</a></li>\n";
		}



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