<?php

class Produit
{	
	private $id_produit;
	private $ref;
	private $nom;
	private $description;
	private $prix;
	private $categorie;
	private $sscategorie;
	private $couleur;
	private $error = false;
	


	public function __construct($post = array())
	{
		if($this->id_produit == null)
		{
			if(isset($post['id_produit'], $post['ref'], $post['nom'], $post['desc'], $post['prix'], $post['categorie'], $post['sscategorie'], $post['couleur']))
			{
				$this->setId_produit($post['id_produit']);
				$this->setRef($post['ref']);
				$this->setNom($post['nom']);
				$this->setDescription($post['description']);
				$this->setPrix($post['prix']);
				$this->setCategorie($post['categorie']);
				$this->setSscategorie($post['sscategorie']);
				$this->setCouleur($post['couleur']);
			}
			else
			{
				$this->error = true;
			}
		}
	}
	public function setRef($ref)
	{
		if (is_numeric($ref))
			{
				$this->ref = $ref;
			}
		else
			{
				$this->error = true;
			}
	}
	public function setNom($nom)
	{
		if (strlen($nom) > 2)
			{
				$this->nom = ($nom);
			}
		else
			{
				$this->error = true;
			}
	}
	public function setDescription($description)
	{
		if ($description>5)
		{
				$this->description = $description;
		}
		else
		{
			$this->error = true;
		}		
	}
	public function setPrix($prix)
	{
		if (is_numeric($prix))
		{
			$this->prix = $prix;
		}

		else
		{
			$this->error = true;
		}
	}
	
	
	public function getRef()
	{
		return $this->ref;
	}
	public function getNom()
	{
		return $this->monom;
	}
	public function getDescription()
	{
		return $this->desc;
	}
	public function getPrix()
	{
		return $this->prix;
	}
	public function getCategorie()
	{
		return $this->categorie;
	}
	public function getSscategorie()
	{
		return $this->sscategorie;
	}
	public function getCouleur()
	{
		return $this->couleur;
	}
	public function isOK()
	{
		return $this->error == false;
	}
}
		
