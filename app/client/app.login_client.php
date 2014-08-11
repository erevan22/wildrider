<?php
	/* Start : Inscription d'un nouveau client */
	if(isset($_POST["f_btn_new_client"])){
		require("../../sources/config/app.config.php");

		//Récupération des variables et protection des données envoyées
		$nom       = strtoupper(mysqli_real_escape_string($db_link, $_POST["f_nom"]));
		$prenom    = ucwords(mysqli_real_escape_string($db_link, $_POST["f_prenom"]));
		$login     = mysqli_real_escape_string($db_link, $_POST["f_login"]);
		$password  = mysqli_real_escape_string($db_link, $_POST["f_password"]);
		$password  = md5($password);
		$adresse   = mysqli_real_escape_string($db_link, $_POST["f_adresse_1"])."<br />";
		$adresse  .= mysqli_real_escape_string($db_link, $_POST["f_adresse_2"]);
		$cp        = mysqli_real_escape_string($db_link, $_POST["f_cp"]);
		$ville     = strtoupper(mysqli_real_escape_string($db_link, $_POST["f_ville"]));
		$mail      = strtolower(mysqli_real_escape_string($db_link, $_POST["f_mail"]));
		$tel       = mysqli_real_escape_string($db_link, $_POST["f_telephone"]);

		//Récupération du dernier n° client inséré
		$requete = "SELECT refcli FROM t_client ORDER BY refcli DESC LIMIT 0,1";
		$resultat = mysqli_query($db_link, $requete);
		while ($data = mysqli_fetch_array($resultat))
		{
			$current_ref_client = $data["refcli"];
		}
		//Formatage du n° client
		$serial = intval(substr($current_ref_client, 5, 5)) + 1;
		if($serial < 10)
		{
			$serial = "0000".$serial;
		}
		else if($serial < 100)
		{
			$serial = "000".$serial;
		}
		else if($serial < 1000)
		{
			$serial = "00".$serial;
		}
		else if($serial < 10000)
		{
			$serial = "0".$serial;
		}
		$serial = date("Y").".".$serial;

		//Requête d'insersion
		$requete = "INSERT INTO t_client (
						id_client,
						nom,
						prenom,
						login,
						password,
						email,
						telephone,
						refcli)
					VALUES (
						NULL,
						'$nom',
						'$prenom',
						'$login',
						'$password',
						'$mail',
						'$tel',
						'$serial'
						)";
		mysqli_query($db_link, $requete);

		/*
		Récupération du dernier id client pour enregistrer l'adresse
		dans la table adresse
		*/
		$requete = "SELECT id_client FROM t_client WHERE refcli = '$serial'";

		$resultat = mysqli_query($db_link, $requete);

		while($data = mysqli_fetch_array($resultat))
		{
			$client_id = $data["id_client"];
		}

		//Insersion de l'adresse client
		$requete = "INSERT INTO t_adresse (
						id_adresse,
						id_client,
						type,
						libadresse,
						cp,
						ville ) 
					VALUES (
						NULL,
						'$client_id',
						'P',
						'$adresse',
						'$cp',
						'$ville'
						)";
		mysqli_query($db_link, $requete);

		/*
		Initialisation de la variable client enregistré
		pour afficher le module "Mon espace"
		*/
		$_SESSION["client_registrer"] = 1;

		// Redirection vers la page d'accueil
		header("location: ../../");
	}
	/* End : Inscription d'un nouveau client */
	
	
	/* Pas d'inscription ou de login, affichage du double formulaire */
	else
	{
		require("view/client/view.login_client.phtml");
	}
?>