<?php
	class Producto{
		private $codigoProducto;
		private $nombreProducto;
		private $marca;
		private $precio;
		private $categoria;
		private $tipoPago;

		public function __construct(
			$codigoProducto,
			$nombreProducto,
			$marca,
			$precio,
			$categoria,
			$tipoPago		
		){
			$this->codigoProducto =  $codigoProducto;
			$this->nombreProducto = $nombreProducto;
			$this->marca = $marca;
			$this->precio = $precio;
			$this->categoria = $categoria;
			$this->tipoPago = $tipoPago;
		}

		public function mostrarInformacion(){
			$strCategorias="";
			for($i=0;$i<count($this->categoria);$i++)
				$strCategorias .= $this->categoria[$i] . "-";

			echo $this->codigoProducto . ", ".
			$this->nombreProducto . ", ".
			$this->marca . ", ".
			$strCategorias.", ".
			$this->precio . ", ".
			$this->tipoPago;


		}

	}

?>