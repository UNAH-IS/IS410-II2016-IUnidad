<?php

	class Producto{
		private $codigoProducto;
		private $nombreProducto;

		//Constructores con el mismo nombre de la clase esta deprecado
		//La forma no deprecada es con __construct
		public function __construct($codigoProducto, $nombreProducto){
			$this->codigoProducto = $codigoProducto;
			$this->nombreProducto = $nombreProducto;
		}

		public function getCodigoProducto(){
			return $this->codigoProducto;
		} 

		public function setCodigoProducto($codigoProducto){
			$this->codigoProducto = $codigoProducto;
		}

		public function getNombreProducto(){
			return $this->nombreProducto;
		} 

		public function setNombreProducto($nombreProducto){
			$this->nombreProducto = $nombreProducto;
		}

		public function toString(){
			return $this->nombreProducto . "(".$this->codigoProducto.")";
		}
	}

?>
<h1>¿Se vera esto desde la pagina index.php?</h1>