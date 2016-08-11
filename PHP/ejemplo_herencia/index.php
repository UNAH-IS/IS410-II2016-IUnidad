<?php
	include_once("class/class_alumno.php");
	include_once("class/class_maestro.php");

	function mostrarInformacion($objeto){
		echo $objeto->toString() . "<br>";
	}

	function mostrarMaestros($arreglo){
		echo "<h1>Listado de Maestros</h1>";
		for($i=0;$i<count($arreglo);$i++){
			//$objeto instanceof Clase
			if ($arreglo[$i] instanceof Maestro)
				mostrarInformacion($arreglo[$i]);
		}
	}

	function mostrarAlumnos($arreglo){
		echo "<h1>Listado de Alumnos</h1>";
		for($i=0;$i<count($arreglo);$i++){
			//$objeto instanceof Clase
			if ($arreglo[$i] instanceof Alumno)
				mostrarInformacion($arreglo[$i]);
		}
	}

	function mostrarPersonas($arreglo){
		echo "<h1>Listado de personas que no son maestros ni alumnos</h1>";
		for($i=0;$i<count($arreglo);$i++){
			//$objeto instanceof Clase
			if (!$arreglo[$i] instanceof Alumno && !$arreglo[$i] instanceof Maestro)
				mostrarInformacion($arreglo[$i]);
		}
	}
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
			$p1 = new Persona("Luis","Perez","M",45,"Ing. Sistemas","Matutino");
			$p2 = new Persona("Victor","Perez","M",45,"Ing. Sistemas","Matutino");

			$a = new Alumno("Pedro","Rodriguez","M",50,"Ing. Sistemas","Vespertina", "1995131232132");
			$a1 = new Alumno("ElBrayan","Rodriguez","M",50,"Ing. Sistemas","Vespertina", "1995131232132");
			$a2 = new Alumno("ElKevin","Rodriguez","M",50,"Ing. Sistemas","Vespertina", "1995131232132");
			$m = new Maestro("LaBritani","Lopez","F",55,"Ing. Sistemas","Vespertina", "545454",432321);
			$m1 = new Maestro("LaYolanda","Lopez","F",55,"Ing. Sistemas","Vespertina", "545454",432321);
			$m2 = new Maestro("LaYarosla","Lopez","F",55,"Ing. Sistemas","Vespertina", "545454",432321);

			$arreglo[]=$p;
			$arreglo[]=$p1;
			$arreglo[]=$p2;
			$arreglo[]=$a;
			$arreglo[]=$a1;
			$arreglo[]=$a2;
			$arreglo[]=$m;
			$arreglo[]=$m1;
			$arreglo[]=$m2;


			mostrarAlumnos($arreglo);
			mostrarMaestros($arreglo);
			mostrarPersonas($arreglo);
			

			/*mostrarInformacion($p);
			mostrarInformacion($a);
			mostrarInformacion($m);*/

			//echo $p->toString()."<br>";
			//echo $a->toString()."<br>";
			//echo $m->toString()."<br>";
		?>
	</body>
</html>