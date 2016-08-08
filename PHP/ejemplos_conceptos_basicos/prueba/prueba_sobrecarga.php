<?php
	class Producto
	{
		private $_nombre;
		private $_precio;

		function __construct(){
			$args = func_get_args();
			$nargs = func_num_args();
			switch($nargs) {
				case 1:
				$this->__construct1($args[0]);
				break;
				case 2:
				$this->__construct2($args[0], $args[1]);
				break;
			}
		}
		
		function __construct1($valor){
			$this->_nombre = $valor;
		}
		
		function __construct2($valor1, $valor2){
			$this->_nombre = $valor1;
			$this->_precio = $valor2;
		}

		public function mostrarInformacion(){
			return $this->_nombre . ", " . $this->_precio;
		}
	}

	$p1 = new Producto("Calcetines", 123);
	$p2 = new Producto("Guitarra");
	echo $p1->mostrarInformacion() . "<br>";
	echo $p2->mostrarInformacion();

?>