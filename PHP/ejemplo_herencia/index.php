<?php
	include_once("class/class_alumno.php");
	include_once("class/class_maestro.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Prueba de funciones</title>
		<meta charset="UTF8">
	</head>
	<body>
		<?php
			//$nombre, $apellido, $genero,
			//$edad, $carrera, $horario
			$p = new Persona("Juan","Perez","M",45,"Ing. Sistemas","Matutino");
			$a = new Alumno("Pedro","Rodriguez","M",50,"Ing. Sistemas","Vespertina", "1995131232132");
			$m = new Maestro("Maria","Lopez","F",55,"Ing. Sistemas","Vespertina", "545454",432321);
			echo $p->toString()."<br>";
			echo $a->toString()."<br>";
			echo $m->toString()."<br>";
		?>
	</body>
</html>