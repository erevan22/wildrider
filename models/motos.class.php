<?php

class Moto 
{	
	private $nommoto;
	private $id;
	private $couleur;
	private $cylindre;
	private $error = false;
	private $annee;
	private $kilomètrage = rand(0, 300000);


	public function __construct($post = array())
	{
		if($this->id == null)
		{
			if(isset($post['nomoto']), ($post['couleur']), ($post['cylindre']), ($post['kilometrage']))
			{
				$this->setNomoto($post['nomoto']);
				$this->setCouleur($post['couleur']);
				$this->setCylindre($post['cylindre']);
				$this->setAnnee($post['annee']);
				$this->setKilometrage($post['kilometrage']);
			}
			else
			{
				$this->error = true;
			}
		}
	}
	public function setNommoto($nomoto)
	{
		if (strlen($nomoto) > 2)
			{
				$this->nomoto = $nomoto;
			}
		else
			{
				$this->error = true;
			}
	}
	public function setcouleur($couleur)
	{
		if (strlen($couleur) > 2)
			{
				$this->couleur = ($couleur);
			}
		else
			{
				$this->error = true;
			}
	}
	public function setCylindre($cylindre)
	{
		if (is_numeric($cylindre) && $cylindre>0)
		{
				$this->cylindre = $cylindre;
		}
		else
		{
			$this->error = true;
		}		
	}
	public function setAnnee($annee)
	{
		if (is_numeric($annee) && $annee==4)
		{
			$this->annee = $annee;
		}

		else
		{
			$this->error = true;
		}
	}
	public function setKilometrage($kilometrage)
	{
		if (is_numeric($kilometrage))
		{
			$this->kilometrage = $kilometrage;
		}
		else
		{
			$this->error = true;
		}
	}
	
	}
	
	public function getMonom()
	{
		return $this->monom;
	}
	public function getCouleur()
	{
		return $this->couleur;
	}
	public function getCylindre()
	{
		return $this->cylindre;
	}
	public function getAnnee()
	{
		return $this->annee;
	}
	public function getKilometrage($kilometrage)
	{
		return $this->kilometrage;
	}
	public function isOK()
	{
		return $this->error == false;
	}
}
		
