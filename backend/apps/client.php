<?php

$db =  mysqli_connect("localhost","root","troiswa","wildrider");
//Recherche des clients de la bases */

function getClient($db)
{
	$clients = array();
	$req = "SELECT * FROM t_client order by nom";
	$res = mysqli_query($db, $req);
	while ($data = mysqli_fetch_assoc($res))
		$clients[] = $data;
	return $clients;
}

$clients = getClient($db);

require('views/client.phtml');
?>