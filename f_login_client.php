<?php
class User
{
	private $id;
	private $login;
	private $password;
	private $email;
	private $tel;

	public function setLogin($login)
	{
		if (strlen($login) > 2)
			$this->login = $login;
	}
	public function setPassword($password)
	{
		if (strlen($password) > 3)
			$this->password = md5($password);
	}
	public function setEmail($email)
	{
		if (filter_var($email, FILTER_VALIDATE_EMAIL))
			$this->email = $email;
	}
	public function settel($tel)
	{
		if (strlen($tel) > 2)
			$this->tel = $tel;
	}
	
	public function getLogin()
	{
		return $this->login;
	}
	public function getEmail()
	{
		return $this->email;
	}
	public function gettel()
	{
		return $this->tel;
	}
	
	public function verifPassword($password)
	{
		return ($this->password == md5($password));
	}
}
?>