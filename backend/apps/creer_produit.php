<?php

$produit = $_POST['idprod'];


$db =  mysqli_connect("localhost","root","troiswa","wildrider");
//Recherche du produit dans la base */



if (isset($_POST['creer_produit']))
{
		echo "creer produit";
		

		//Mise à jour du produit
		$refproduit  = $_POST['refpdt'];
		$nomproduit  = $_POST['nom'];
		$description = $_POST['description'];
		$prix = $_POST['prix'];
		$categorie = $_POST['categorie'];
		$sscategorie = $_POST['sscat'];
		$couleur = $_POST['couleur'];


		//ordre de mise à jour
		$req = "INSERT INTO t_produit 
			(refpdt,
			 nom,
			 description,
			 prix,
			 categorie,
			 sscategorie,
			 couleur)
			values (
			'".$refproduit."',
		    '".$nomproduit."',
		    '".$description."',
  			'".$prix."',
		 	'".$categorie."',
			'".$sscategorie."',
			'".$couleur."')";
		$res = mysqli_query($db, $req);

}

include("apps/catalogue.php");


?>