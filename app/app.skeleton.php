<?php
	if(!isset($_GET["page"]))
	{
		$_GET["page"] = "";
	}

	switch ($_GET["page"])
	{
		case 'variable':
			# code...
			break;
		default:
			header("location: ./")
			break;
	}
	
	require("view/view.skeleton.phtml");
?>