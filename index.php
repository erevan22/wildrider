<<<<<<< HEAD
<?php
require("sources/config/app.config.php");
require("sources/config/app.parametres.php");
$access = array('accueil', 'client', 'categorie', 'produit', 'fournisseur','sscat');
$error = '';

$page = 'accueil';
if (isset($_GET['page']))
{
	if (in_array($_GET['page'], $access) )
		$page = $_GET['page'];
}

if (isset($_GET['ajax']))
	require("apps/".$page.".php");
else
	require('apps/skel.php');


?>
=======
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
>>>>>>> 79261bff632d0c9e981204b0292edac4fe583ed9
