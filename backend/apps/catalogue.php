<?php

$db =  mysqli_connect("localhost","root","troiswa","wildrider");
//Recherche des clients de la bases */

$page="catalogue";


function getProduit($db)
{
	$produits = array();
	$req = "SELECT * FROM t_produit order by nom";
	$res = mysqli_query($db, $req);
	while ($data = mysqli_fetch_assoc($res))
		$produits[] = $data;
	return $produits;
}

$produits = getProduit($db);



if	 (isset($_GET['produit'])) // choix d'un produit détail à afficher
{
	echo "produit";
	$id_produit = $_GET['produit'];
	echo "id produit = ".$id_produit;
	$page="det_produit";
	require('apps/skel.php');
	
}	


require("views/".$page.".phtml");
?>