<!DOCTYPE html>
<html>
	<head>
		<title>Formularios</title>
		<meta charset="UTF8">
	</head>
	<body>
		<?php
			//isset: Verificar si una variable u objeto esta definido
			if (isset($_POST["txt-nombre-usuario"]))
				echo "<h1>".$_POST["txt-nombre-usuario"]."</h1>";
		?>
		<!-- Las propiedades html se escriben en la etiqueta de apertura y sus sintaxis es propiedad="valor" 
		El metodo GET envia la informacion por la URL
		El metodo POST envia la informacion en background
		-->
		<form action="index.php" method="POST">
			<!-- Para gran parte de los componentes de entradas del formulario se utiliza la etiqueta input -->
			<!-- Utilizar la propiedad value para asignar un valor por defecto ejempo: value="Hola mundo"  -->

			<!-- (expresion_booleana)?valor_verdadero:valor_falso;-->
			Usuario: <input name="txt-nombre-usuario" id="txt-nombre-usuario" type = "text" size="50" placeholder="Introduzca su usuario" value = "<?php echo isset($_POST["txt-nombre-usuario"])?$_POST["txt-nombre-usuario"]:""; ?>"><br><br>
			Contraseña: <input name="txt-contrasena" id="txt-contrasena" type="password" size="50" placeholder="Introduzca la contraseña">
			<input name = "btn-login" id = "btn-login" type="submit" value="Acceder">
		</form>
	</body>
</html>