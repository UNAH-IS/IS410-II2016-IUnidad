<!DOCTYPE html>
<!-- Comentario -->
<html>
	<head>
		<title><?php echo "Este es el titulo"; ?></title>
	</head>
	<body>
	Linea 1<br>Linea 2<br>
	<?php
		//Comentario de una linea
		/*
		Comentario de varias lineas
		*/	
		$parte1 = "Hola Mundo";
		$parte2 = "que cool PHP<br>";
		echo $parte1 ." ". $parte2; //El punto se utiliza para concatenar cadenas

		$mensajeCool = 5+10;

		echo $mensajeCool;

		define("VALOR_MAXIMO", 100);
		echo VALOR_MAXIMO;
	?>
	</body>
</html>