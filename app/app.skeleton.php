<?php
	switch($page)
	{
		case "login":
			$url = "app/client/app.login_client.php";
			break;
		default:
			$url = "app/app.section.php";
			break;
	}

	require("view/view.skeleton.phtml");
?>