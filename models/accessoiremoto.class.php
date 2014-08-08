<?php
class Accessoiremoto
{
	private $cylindre;
public function __construct($cylindre)
{

	echo "cylindre";
	parent::__construct();
	$this->setCylindre($cylindre);

}
public function getCylindre(){

	return $this->cylindre;
}
public function setCylindre($cylindre)
{

	if (is_numeric($cylindre) && $cylindre>0)

		$this->cylindre = $cylindre;

}
}
