<?php
	function send_mail($exp_mail, $exp_message)
	{
		$to      = "contact@alternetive.fr";
		$subject = "Wild Rider : Nouveau message de ".$exp_message;
		$headers = "From: webmaster@example.com";

		mail($to, $subject, $exp_message, $headers);

		echo '<script src="sources/js/confirmation_contact.js"></script>';

		$url_from = $_SERVER['HTTP_REFERER'];
		header("location: $url_from");
	}

	if(!isset($_POST["f_btn_send_message"]))
	{
		$_POST["f_btn_send_message"] = "";
	}
	else
	{
		$mail = mysqli_real_escape_string($db_link, $_POST["f_contact_mail"]);
		$message = mysqli_real_escape_string($db_link, $_POST["f_contact_message"]);
		send_mail($mail, $message);
	}


	require("view/view.form.contact.footer.phtml");
?>