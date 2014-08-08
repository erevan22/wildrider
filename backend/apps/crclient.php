<?php
require("../models/class.client.php");


if ((isset($_POST['enrclt'])))

{
	$client = new Client($_POST); // instance nouveau client /
	if ($client->isOK())
			echo "contrôle client ok";
}

require("views/crclient.phtml");
?>

