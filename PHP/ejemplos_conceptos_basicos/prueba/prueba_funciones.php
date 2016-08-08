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

<!DOCTYPE html>
<html>
	<head>
		<title>Prueba de funciones</title>
	</head>
	<body>
		<?php 
			$a = 2;
			$a = new Producto(1,"Calcetines");
			echo "Codigo producto: " . $a->getCodigoProducto()."<br>\n" ;
			echo "Nombre producto: " . $a->getNombreProducto()."<br>\n";
			echo "Metodo toString: " . $a->toString()."<br>\n";
			//echo "Resultado suma 2 numeros: " . sumar(5,6) . "<br>";
			//echo "Resultado suma 3 numeros: " . sumar(5,6,7);
		?>
	</body>
</html>

<?php 
	function sumar($a, $b, $c=NULL){
		if ($c == NULL)
			return $a + $b;
		else 
			return $a + $b + $c;
	}
?>

<!-- Si: 8
 No: 1
 No sabe o no quiere opinar: 30 -->