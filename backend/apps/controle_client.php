<?php

require('../../models/client.class.php');

echo "CRCLIENT";
if (isset($_POST['creerclient']))

{
	echo "controle client";
	$client = new Client($_POST); // instance nouveau client /
	if ($client->isOK())
			echo "contrôle client ok";
	else
			{
			echo "contrôle client ko";
			require('backend.php');
			}


}

require('../views/crclient.phtml');
?>
?>