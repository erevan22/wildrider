<?php

$produit = $_POST['idprod'];


$db =  mysqli_connect("localhost","root","troiswa","wildrider");
//Recherche du produit dans la base */



if (isset($_POST['modif_produit']))
{
		echo "modif produit";
		$req = "SELECT * FROM t_produit where id_produit =". $produit;
		$res = mysqli_query($db, $req);
		while ($data = mysqli_fetch_assoc($res))
		{
		$produits[] = $data;//* on récupère les infos du produit
		}

		//Mise à jour du produit
		$refproduit  = $_POST['refpdt'];
		$nomproduit  = $_POST['nom'];
		$description = $_POST['description'];
		$prix = $_POST['prix'];
		$categorie = $_POST['categorie'];
		$sscategorie = $_POST['sscat'];
		$couleur = $_POST['couleur'];


		//ordre de mise à jour
		$req = "UPDATE t_produit SET 
		 refpdt = '".$refproduit."',
		 nom = '".$nomproduit."',
		 description = '".$description."',
		 prix = '".$prix."',
		 categorie = '".$categorie."',
		 sscategorie = '".$sscategorie."',
		 couleur = '".$couleur."'

		 WHERE id_produit = '".$produit."'";
		$res = mysqli_query($db, $req);

}

include("apps/catalogue.php");


?>