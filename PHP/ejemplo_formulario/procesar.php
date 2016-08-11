<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF8">
	</head>
	<body>
		<?php 
			echo "Pagina que procesara la informacion";
			//$_GET es un arreglo especial que contiene la informacion enviada por otra pagina web utilizando el metodo GET
			//Para acceder a la informacion se hace de la siguiente forma:
			// $_GET["name del input html"]
			
			echo "<h1>Nombre usuario: ".$_POST["txt-nombre-usuario"]."</h1>";
			echo "<h1>Contraseña: ".$_POST["txt-contrasena"]."</h1>";
		?>
	</body>
</html>