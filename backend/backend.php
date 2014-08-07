<?php
session_start();

require("sources/config/app.configbe.php");
require("sources/config/app.parametresbe.php");
$access = array('accueil', 'client', 'categorie', 'produit', 'fournisseur','sscat');
$error = '';
$page = 'accueil';

if (isset($_POST['quitter']))
	exit();

else if	 (isset($_GET['page']))
{
	echo "client";
	$page = $_GET['page'];
	
}
require('apps/skel.php');

?>
