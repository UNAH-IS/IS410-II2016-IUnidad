<!DOCTYPE html>
<html>
	<head>
		<title>Formularios</title>
		<meta charset="UTF8">
	</head>
	<body>
		<!-- Las propiedades html se escriben en la etiqueta de apertura y sus sintaxis es propiedad="valor" 
		El metodo GET envia la informacion por la URL
		El metodo POST envia la informacion en background
		-->
		<form action="http://localhost/ejemplos_poo/ejemplo_formulario/procesar.php" method="POST">
			<!-- Para gran parte de los componentes de entradas del formulario se utiliza la etiqueta input -->
			<!-- Utilizar la propiedad value para asignar un valor por defecto ejempo: value="Hola mundo"  -->
			Usuario: <input name="txt-nombre-usuario" id="txt-nombre-usuario" type = "text" size="50" placeholder="Introduzca su usuario"><br><br>
			Contraseña: <input name="txt-contrasena" id="txt-contrasena" type="password" size="50" placeholder="Introduzca la contraseña">
			<input name = "btn-login" id = "btn-login" type="submit" value="Acceder">
		</form>
	</body>
</html>