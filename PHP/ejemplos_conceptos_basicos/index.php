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
			$a = 2;
			$a = new Producto(1,"Calcetines");
			echo "Codigo producto: " . $a->getCodigoProducto()."<br>\n" ;
			echo "Nombre producto: " . $a->getNombreProducto()."<br>\n";
			echo "Metodo toString: " . $a->toString()."<br>\n";
		?>
	</body>
</html>