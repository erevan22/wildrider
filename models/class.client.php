<?php
class Client
{
	private $id;
	private $nom;
	private $prenom;
	private $email;
	private $telephone;
	private $birthdate;
	private $error = false;
	private $erreurnom="";
	private $erreurprenom="";
	private $erreuremail="";
	private $erreurdate=""; 

	public function __construct($post = array())
	{
		if ($this->id == null)
		{
			if (isset($post['nom'], $post['prenom'], $post['email'], $post['birthdate']))
			{
				$this->setNom($post['nom']);
				$this->setPrenom($post['prenom']);
				$this->setEmail($post['email']);
				$this->setBirthdate($post['birthdate']);
			}
			else
				$this->error = true;
		}
	}
	
	public function setNom($nom)
	{
		if (strlen($nom) > 2)
			$this->nom = $nom;
		
			else
			{
			$this->error = true;
			$erreurnom="Nom incorrect";
			}
	}
	
	public function setPrenom($prenom)
	{
		if (strlen($prenom) > 5)
			$this->prenom = $prenom;
		
			else
			{
			$this->error = true;
			$erreurpassword="Prénom incorrect";
			}
	}

	public function setEmail($email)
	
	{
		if (filter_var($email, FILTER_VALIDATE_EMAIL))
			$this->email = $email;
		
			else
			{
			$this->error = true;
			$erreuremail="e-mail incorrect";
			}
		
	}
	public function setBirthdate($birthdate)//Format : JJ/MM/YYYY
	{
		if (preg_match("/^(\d{4})-(\d{2})-(\d{2})$/", $birthdate, $matches))
		{
			if(checkdate($matches[2], $matches[3], $matches[1]))
			{
				$this->birthdate = $birthdate;
			}
			else
			{
			$this->error = true;
			$erreurdate="Date de naissance incorrecte";
			}
		}			
	}
	public function getNom()
	{
		return $this->nom;
	}
	public function getPrenom()
	{
		return $this->prenom;
	}
	public function getEmail()
	{
		return $this->email;
	}
	public function getBirthdate()
	{
		return $this->birthdate;
	}
	public function getTelephone()
	{
		return $this->telephone;
	}
	
	public function isOK()
	{
		return $this->error == false;
	}
}
?>