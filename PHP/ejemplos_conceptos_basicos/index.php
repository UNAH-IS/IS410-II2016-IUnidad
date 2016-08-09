<?php
	include_once("class/class_producto.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Prueba de funciones</title>
		<meta charset="UTF8">
	</head>
	<body>
		<?php
			$a = new Producto("Calcetines");
			$b = new Producto(855, "Calcetines");
			//echo "Valor estatico: " . Producto::$valorStatic."<br>";
			/*echo "Metodo toString: " . $a->toString()."<br>\n";
			echo "Metodo toString: " . $b->toString()."<br>\n";*/
			Producto::$valorStatic = "Nuevo valor";
			$a->imprimirValorEstatico();
			$b->imprimirValorEstatico();
		?>
	</body>
</html>