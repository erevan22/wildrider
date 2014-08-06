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
