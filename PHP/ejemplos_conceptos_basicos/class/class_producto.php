<?php

	class Producto{
		private $codigoProducto;
		private $nombreProducto;

		public static $valorStatic = "Este es un valor estatico (ojo, no es una constante)";

		//Constructores con el mismo nombre de la clase esta deprecado
		//La forma no deprecada es con __construct
		public function __construct(){
			$parametros = func_get_args(); //Retorna todos los parametros enviados en __construct en un arreglo
			$cantidadParametros = func_num_args(); //Retorna la cantidad de parametros enviados
			switch ($cantidadParametros) {
				case 1:
					$this->__construct1($parametros[0]);
					break;
				case 2:
					$this->__construct2($parametros[0], $parametros[1]);
					break;
				default:
					echo "Constructor no existe.";
					break;
			}
		} 

		public function __construct1($nombreProducto){
			echo "Se llamo al constructor 1 <br>";
			$this->codigoProducto = 0;
			$this->nombreProducto = $nombreProducto;
		}

		public function __construct2($codigoProducto, $nombreProducto){
			echo "Se llamo al constructor 2 <br>";
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

		public function imprimirValorEstatico(){
			//Si se necesita acceder a un atributo static dentro de la clase se debe utilizar el operador Self:: (operador Paamayim Nekudotayim)
			echo Self::$valorStatic . "<br>";
		}
	}

?>
<h1>¿Se vera esto desde la pagina index.php?</h1>