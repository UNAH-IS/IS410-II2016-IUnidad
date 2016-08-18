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
</head>
<body>
<form action= "index.php" method="GET">
	Codigo Producto: <input type="text" name = "txt-codigo-producto" id = "txt-codigo-producto" value="<?php echo isset($_GET["txt-codigo-producto"])?$_GET["txt-codigo-producto"]:"";  ?>"><br>
	Nombre Producto: <input type="text" name = "txt-nombre-producto" id = "txt-nombre-producto" value="<?php echo isset($_GET["txt-nombre-producto"])?$_GET["txt-nombre-producto"]:"";  ?>"><br>
	Marca: 
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
	<br>
	Precio:<input type="text" name="txt-precio" id="txt-precio" value="<?php echo isset($_GET["txt-precio"])?$_GET["txt-precio"]:"";  ?>"><br>
	Categorias:<label><input type="checkbox" name="chk-categoria[]" value="Alimentos">Alimentos</label>
	<label><input type="checkbox" name="chk-categoria[]" value="Ropa">Ropa</label>
	<label><input type="checkbox" name="chk-categoria[]" value="Licores">Licores</label><br>
	Tipo pago:<label><input type="radio" name="rbt-tipo-pago" value="Tarjeta">Tarjeta de credito</label>
	<label><input type="radio" name="rbt-tipo-pago" value="Efectivo">Efectivo</label>
	<label><input type="radio" name="rbt-tipo-pago" value="Cheque">Cheque</label>
	<br>
	<input type="submit" value= "Guardar">
	<input type="submit" value= "Actualizar">
	<input type="reset" value= "Limpiar">
</form>
</body>
</html>