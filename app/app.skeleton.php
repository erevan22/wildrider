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
<<<<<<< HEAD
			
=======

>>>>>>> 569550be79bf584407a706274b4d5a5d7e4f468b
			break;
	}
	
	require("view/view.skeleton.phtml");
?>