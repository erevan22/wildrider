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
	private $erreurlogin="";
	private $erreurpassword="";
	private $erreuremail="";
	private $erreurdate=""; 

	public function __construct($post = array())
	{
		if ($this->id == null)
		{
			if (isset($post['nom'], $post['prenom'], $post['email'], $post['birthdate']))
			{
				$this->setLogin($post['nom']);
				$this->setPassword($post['prenom']);
				$this->setEmail($post['email']);
				$this->setBirthdate($post['birthdate']);
			}
			else
				$this->error = true;
		}
	}
	public function setNom($nom)
	{
		if (strlen($login) > 2)
			$this->login = $login;
		
			else
				$this->error = true;
			$erreurlogin="Nom incorrect";
		
	}
	public function setPrenom($prenom)
	{
		if (strlen($nom) > 5)
			$this->nom = $nom;
		
			else
				$this->error = true;
			$erreurpassword="Prénom incorrect";
	}
	public function setEmail($email)
	{
		if (filter_var($email, FILTER_VALIDATE_EMAIL))
			$this->email = $email;
		
			else
				$this->error = true;
			$erreuremail="e-mail incorrect";
		
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
				$this->error = true;
			$erreurdate="Date de naissance incorrecte";
			}			
	}
	public function getNom()
	{
		return $this->login;
	}
	public function getPrenom()
	{
		return $this->password;
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
	public function verifPassword($password)
	{
		return ($this->password == md5($password));
	}
	public function isOK()
	{
		return $this->error == false;
	}
}
?>