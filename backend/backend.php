<?php
session_start();

require("sources/config/app.configbe.php");
require("sources/config/app.parametresbe.php");
$access = array('accueil', 'client', 'categorie', 'produit', 'fournisseur','sscat');
$error = '';
$page = 'accueil';
$produit = 0;

if (isset($_POST['quitter']))
	exit();

else if	 (isset($_GET['page']))
{
	$page = $_GET['page'];

}
require('apps/skel.php');

?>
