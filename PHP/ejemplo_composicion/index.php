<?php
	include_once("class/class_modelo.php");
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
			$p = new Producto(855, "Laptop DELL", new Modelo(123,"Inspiron"));
			echo $p->toString();
		?>
	</body>
</html>