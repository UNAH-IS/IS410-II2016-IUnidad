<!DOCTYPE html>
<html>
	<head>
		<title>Ejemplo estructuras de control</title>
		<!--Las etiquetas meta siempre van dentro de head-->
		<!--meta charset="UTF8"/-->
	</head>
	<body>
		<?php
			$a = 2;
			$b = 5;
			if ($a == $b)
				echo "<b>A es igual a B</b>";
			else
				echo "<h1>A es diferente de B</h1>";

			$opcion = 10;

			switch ($opcion) {
				case 1:
					echo "Selecciono la opcion 1";
					break;
				case 2:
					echo "Selecciono la opcion 2";
					break;
				case 3:
					echo "Selecciono la opcion 3";
					break;
				case 4:
					echo "Selecciono la opcion 4";
					break;
				case 5:
					echo "Selecciono la opcion 5";
					break;
				default:
					echo "Opcion invalida";
					break;
			}


			$contador = 1;
			while ($contador<=6){
				echo "<h".$contador.">Iteraci&oacute;n con while:".$contador."</h".$contador.">\n";
				$contador++;
			}

			for ($i=1;$i<=6;$i++){
				//echo "<h".$i.">Iteraci&oacute;n con for:".$i."</h".$i.">";
				echo "<h$i>Iteraci&oacute;n con for: $i</h$i>\n";
			}

			/*
				Caracteres especiales HTML:
				á &aacute;
				é &eacute;
				í &iacute;
				ó &oacute;
				ú &uacute;
				ñ &ntilde;
			*/
		?>


	</body>
</html>