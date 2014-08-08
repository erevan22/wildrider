<?php

class Product
{	
	private $id;
	private $nom;
<<<<<<< HEAD
	private $reference;
	private $cylindre;
	private $error = false;
	private $annee;
	//private $kilometrage = rand(0, 300000);
=======
	private $couleur;
	private $cylindre;
	private $error = false;
	private $annee;
	
>>>>>>> 026f1a903d3a4bb5ff9b18d81a0bc50f538c42de


	public function __construct($post = array())
	{
		if($this->id == null)
		{
<<<<<<< HEAD
			if(isset($post['nom'], $post['reference'], $post['cylindre'], $post['kilometrage']))
			{
				$this->setNom($post['nom']);
				$this->setReference($post['reference']);
=======
			if(isset($post['nomoto'], $post['couleur'], $post['cylindre'], $post['kilometrage']))
			{
				$this->setNomoto($post['nomoto']);
				$this->setCouleur($post['couleur']);
>>>>>>> 026f1a903d3a4bb5ff9b18d81a0bc50f538c42de
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
<<<<<<< HEAD
	public function setNom($nom)
	{
		if (strlen($nom) > 2)
			{
				$this->nom = $nom;
=======
	public function setNommoto($nomoto)
	{
		if (strlen($nomoto) > 2)
			{
				$this->nomoto = $nomoto;
>>>>>>> 026f1a903d3a4bb5ff9b18d81a0bc50f538c42de
			}
		else
			{
				$this->error = true;
			}
	}
<<<<<<< HEAD
	public function setReference($reference)
	{
		if (strlen($reference) > 2)
=======
	public function setcouleur($couleur)
	{
		if (strlen($couleur) > 2)
>>>>>>> 026f1a903d3a4bb5ff9b18d81a0bc50f538c42de
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
	
<<<<<<< HEAD
	public function getom()
	{
		return $this->monom;
	}
	public function getReference()
	{
		return $this->reference;
=======
	public function getMonom()
	{
		return $this->monom;
	}
	public function getCouleur()
	{
		return $this->couleur;
>>>>>>> 026f1a903d3a4bb5ff9b18d81a0bc50f538c42de
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
		
