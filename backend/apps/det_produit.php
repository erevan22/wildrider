<?php

$produit = $_GET['produit'];
$produits = array();

$db =  mysqli_connect("localhost","root","troiswa","wildrider");
//Recherche du produit dans la base */


$req = "SELECT * FROM t_produit where id_produit =". $produit;
$res = mysqli_query($db, $req);
while ($data = mysqli_fetch_assoc($res))
{
	$produits[] = $data;//* on récupère les infos du produit
}


include("views/det_produit.phtml");

?>