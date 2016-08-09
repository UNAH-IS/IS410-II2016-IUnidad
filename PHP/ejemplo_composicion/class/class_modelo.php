<?php

class Modelo{
	private $codigoModelo;
	private $nombreModelo;

	public function __construct($codigoModelo, $nombreModelo){
		$this->codigoModelo = $codigoModelo;
		$this->nombreModelo = $nombreModelo;
	}

	public function toString(){
		return $this->nombreModelo . "(" .$this->codigoModelo.")";
	}
}

?>