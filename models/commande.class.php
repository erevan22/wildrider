<?php

class Commande
{
	private $id_commande;
	private $ref_com;
	private $ref_client;
	private $ref_produit;
	private $datecde;
	private $etat;

	public function __construct($commandeInitiale)
	{
		if($this->id_produit == null)
		{
			if(isset($post['id_commande'], $post['ref_com'], $post['ref_client'], $post['ref_produit'], $post['datecde'], $post['etat'])
			{
				$this->setId_commande($post['id_commande']);
				$this->setRef_com($post['ref_com']);
				$this->setRef_client($post['ref_client']);
				$this->setRef_produit($post['ref_produit']);
				$this->setDatecde($post['datecde']);
				$this->setEtat($post['etat']);
			}
			else
			{
				$this->error=true;
			}
		}
		
	}
}	


	public function setRef_com($ref_com)
	{
		if (is_numeric($ref_com))
			{
				$this->ref_com = $ref_com;
			}
		else
			{
				$this->error = true;
			}
	}
	public function setRef_client($ref_client)
	{
		if (is_numeric($ref_client))
			{
				$this->ref_client = $ref_client;
			}
		else
			{
				$this->error = true;
			}
	}
	public function setRef_produit($ref_produit)
	{
		if (is_numeric($ref_produit))
			{
				$this->ref_produit = $ref_produit;
			}
		else
			{
				$this->error = true;
			}
	}
	public function setDatecde($datecde)//Format : JJ/MM/YYYY
	{
		if (preg_match("/^(\d{4})-(\d{2})-(\d{2})$/", $datecde, $matches))
		{
			if(checkdate($matches[2], $matches[3], $matches[1]))
			{
				$this->datecde = $datecde;
			}

			else
				$this->error = true;
		}
	public function setEtat($etat)
	{
		if ($etat)
			{
				$this->etat = ($etat);
			}
		else
			{
				$this->error = true;
			}
	}
	
	public function getRef_com()
	{
		return $this->ref_com;
	}
	public function getRef_client()
	{
		return $this->ref_client;
	}
	public function getRef_produit()
	{
		return $this->ref_produit;
	}
	public function getDatecde()
	{
		return $this->datecde;
	}
	public function getEtat()
	{
		return $this->etat;
	}
	
	public function isOK()
	{
		return $this->error == false;
	}
}
		
