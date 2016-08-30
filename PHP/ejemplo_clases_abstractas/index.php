<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		include("class/class_persona.php");
		include("class/class_alumno.php");
		$a = new Alumno("Juan", "Rodriguez", "M",30,"IngSistemas","Matutino",
			"200610012345");
		$a->aprobar();
		//$p = new Persona("Juan", "Rodriguez", "M",30,"IngSistemas","Matutino");
	?>
</body>
</html>