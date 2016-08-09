<?php
	class Producto{
		private $codigoProducto;
		private $nombreProducto;
		private $modelo;

		//Constructores con el mismo nombre de la clase esta deprecado
		//La forma no deprecada es con __construct
		public function __construct($codigoProducto, $nombreProducto, $modelo){
			$this->codigoProducto = $codigoProducto;
			$this->nombreProducto = $nombreProducto;
			$this->modelo = $modelo;
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

		public function getModelo(){
			return $modelo;
		}

		public function setModelo($modelo){
			$this->modelo = $modelo;
		}

		public function toString(){
			return $this->nombreProducto . "(".$this->codigoProducto."), ".
				$this->modelo->toString();
		}

	}

?>