<?php
	switch($page)
	{
		case "logout":
			session_unset();
			session_destroy();
			$url = "app/app.section.php";
			break;
		case "login":
			$url = "app/client/app.login_client.php";
			break;
		default:
			$url = "app/app.section.php";
			break;
	}

	require("view/view.skeleton.phtml");
?>