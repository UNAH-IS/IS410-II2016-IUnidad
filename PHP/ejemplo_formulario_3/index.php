<?php
	if (count($_GET)>0){
		echo "Si hay informacion para procesar";
		include_once("class/class_producto.php");
		$producto = new Producto(
			$_GET["txt-codigo-producto"],
			$_GET["txt-nombre-producto"],
			$_GET["slc-marca"],
			$_GET["txt-precio"],
			$_GET["chk-categoria"],
			$_GET["rbt-tipo-pago"]	
		);

		$producto->mostrarInformacion();

		//En caso de que el archivo este una carpeta atras
		//include_once("../css/style.css");
		
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ejemplo formulario 2</title>
	<!-- Comentario HTML -->

	<style>
		/*Comentarios CSS*/
		/*Selector puede ser el nombre de una etiqueta, un ID o el nombre de una clase CSS*/
		/*
		selector {
			propiedad1:valor1;
			propiedad2:valor2;

			propiedadN:valorN;
		}
		*/
		h1 {
			color:#00FF00;
			font-family:Calibri;
			background-color:#000000;
			font-size:60px;
		}

		#txt-nombre-producto {
			border-color: #0000FF;
			font-size:20px;
		}

		.estilo-cool {
			padding: 10px;
		}
	</style>
</head>
<body style="background-image:url(img/silence-seekers.jpg);background-repeat:no-repeat;color:#ffffff;">
	<h1>Super formulario</h1>
	<form action= 'index.php' method="GET">
		<table>
			<tr>
				<td>
					Codigo Producto: 
				</td>
				<td>
					<input class="estilo-cool" type="text" name = "txt-codigo-producto" id = "txt-codigo-producto" value="<?php echo isset($_GET["txt-codigo-producto"])?$_GET["txt-codigo-producto"]:"";  ?>">
				</td>
			</tr>
			<tr>
				<td>
					Nombre Producto: 
				</td>
				<td>
					<input type="text" name = "txt-nombre-producto" id = "txt-nombre-producto" value="<?php echo isset($_GET["txt-nombre-producto"])?$_GET["txt-nombre-producto"]:"";  ?>">
				</td>
			</tr>
			<tr>
				<td>
					Marca: 
				</td>
				<td>
					<select name = "slc-marca"  id = "slc-marca" >
						<option value="1" <?php 
							if (isset($_GET["slc-marca"]))
								if ($_GET["slc-marca"]==1)
									echo "selected"; ?>>Rexona</option>
						<option value="2" <?php 
							if (isset($_GET["slc-marca"]))
								if ($_GET["slc-marca"]==2)
									echo "selected"; ?>>Adidas</option>
						<option value="3" <?php 
							if (isset($_GET["slc-marca"]))
								if ($_GET["slc-marca"]==3)
									echo "selected"; ?>>Sula</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					Precio:
				</td>
				<td>
					<input class="estilo-cool" type="text" name="txt-precio" id="txt-precio" value="<?php echo isset($_GET["txt-precio"])?$_GET["txt-precio"]:"";  ?>">
				</td>
			</tr>
			<tr>
				<td>
					Categorias:
				</td>
				<td>
					<label><input type="checkbox" name="chk-categoria[]" value="Alimentos">Alimentos</label>
					<label><input type="checkbox" name="chk-categoria[]" value="Ropa">Ropa</label>
					<label><input type="checkbox" name="chk-categoria[]" value="Licores">Licores</label>
				</td>
			</tr>
			<tr>
				<td>
					Tipo pago:
				</td>
				<td>
					<label><input type="radio" name="rbt-tipo-pago" value="Tarjeta">Tarjeta de credito</label>
					<label><input type="radio" name="rbt-tipo-pago" value="Efectivo">Efectivo</label>
					<label><input type="radio" name="rbt-tipo-pago" value="Cheque">Cheque</label>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" value= "Guardar">
					<input type="submit" value= "Actualizar">
					<input type="reset" value= "Limpiar">
				</td>
			</tr>
		</table>
	</form>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>