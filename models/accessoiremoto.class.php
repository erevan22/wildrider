<?php
class Accessoiremoto
{
<<<<<<< HEAD
	private $reference;
	public function __construct($reference)
{

	echo "reference";
	parent::__construct();
	$this->setReference($reference);

}
public function getReference(){

	return $this->reference;
=======
	private $cylindre;
public function __construct($cylindre)
{

	echo "cylindre";
	parent::__construct();
	$this->setCylindre($cylindre);

}
public function getCylindre(){

	return $this->cylindre;
>>>>>>> 026f1a903d3a4bb5ff9b18d81a0bc50f538c42de
}
public function setCylindre($cylindre)
{

	if (is_numeric($cylindre) && $cylindre>0)

		$this->cylindre = $cylindre;

}
}
<<<<<<< HEAD
S
=======
>>>>>>> 026f1a903d3a4bb5ff9b18d81a0bc50f538c42de
