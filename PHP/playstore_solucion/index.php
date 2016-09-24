<?php
	include_once("class/class_producto.php");
	include_once("class/class_aplicacion.php");
	include_once("class/class_icono.php");
	include_once("class/class_usuario.php");
	include_once("class/class_desarrollador.php");
	include_once("class/class_comentario.php");

	$iconos[]=new Icono("http://localhost/playstore/img/icono1.png",100,100);
	$iconos[]=new Icono("http://localhost/playstore/img/icono2.png",100,100);
	$iconos[]=new Icono("http://localhost/playstore/img/icono3.png",100,100);
	$iconos[]=new Icono("http://localhost/playstore/img/icono4.png",100,100);
	$iconos[]=new Icono("http://localhost/playstore/img/icono5.png",100,100);


	$comentarios[] = new Comentario("Comentario 1",new Usuario("Usuario1","usuario1@gmail.com"),"DEscripcion comentario 1","12-12-2012");
	$comentarios[] = new Comentario("Comentario 2",new Usuario("Usuario2","usuario2@gmail.com"),"DEscripcion comentario 2","12-12-2012");
	$comentarios[] = new Comentario("Comentario 3",new Usuario("Usuario3","usuario3@gmail.com"),"DEscripcion comentario 3","12-12-2012");
	$comentarios[] = new Comentario("Comentario 4",new Usuario("Usuario4","usuario4@gmail.com"),"DEscripcion comentario 4","12-12-2012");
	$comentarios[] = new Comentario("Comentario 5",new Usuario("Usuario5","usuario5@gmail.com"),"DEscripcion comentario 5","12-12-2012");


	$desarrolladores[] = new Desarrollador("Desarrollador 1", "desarrollador1@gmail.com","http://desarrollador.com");
	$desarrolladores[] = new Desarrollador("Desarrollador 2", "desarrollador1@gmail.com","http://desarrollador.com");
	$desarrolladores[] = new Desarrollador("Desarrollador 3", "desarrollador1@gmail.com","http://desarrollador.com");
	$desarrolladores[] = new Desarrollador("Desarrollador 4", "desarrollador1@gmail.com","http://desarrollador.com");
	$desarrolladores[] = new Desarrollador("Desarrollador 5", "desarrollador1@gmail.com","http://desarrollador.com");
	
	$categorias[] = "Categoria 1";
	$categorias[] = "Categoria 2";
	$categorias[] = "Categoria 3";
	$categorias[] = "Categoria 4";
	$categorias[] = "Categoria 5";
	
	$estatus[] = "Estatus 1";
	$estatus[] = "Estatus 2";
	$estatus[] = "Estatus 3";
	$estatus[] = "Estatus 4";
	$estatus[] = "Estatus 5";

	$aplicaciones[] = new Aplicacion("Aplicacion 1",
					"Descripcion aplicacion 1",
					"12-12-2012" ,
					4,
					$comentarios,
					"http://localhost/playstore/apks/aplicacion1.apk",
					2342,
					$iconos[0],
					$categorias[0],
					$estatus[0],
					"1.0",
					"12-12-2012",
					$desarrolladores[0]);

	$aplicaciones[] = new Aplicacion("Aplicacion 2",
					"Descripcion aplicacion 2",
					"12-12-2012" ,
					4,
					$comentarios,
					"http://localhost/playstore/apks/aplicacion2.apk",
					2342,
					$iconos[1],
					$categorias[1],
					$estatus[1],
					"1.0",
					"12-12-2012",
					$desarrolladores[1]);

	$aplicaciones[] = new Aplicacion("Aplicacion 3",
					"Descripcion aplicacion 3",
					"12-12-2012" ,
					5,
					$comentarios,
					"http://localhost/playstore/apks/aplicacion3.apk",
					2342,
					$iconos[2],
					$categorias[2],
					$estatus[2],
					"1.0",
					"12-12-2012",
					$desarrolladores[2]);

	$aplicaciones[] = new Aplicacion("Aplicacion 4",
					"Descripcion aplicacion 4",
					"12-12-2012" ,
					3,
					$comentarios,
					"http://localhost/playstore/apks/aplicacion4.apk",
					2342,
					$iconos[3],
					$categorias[3],
					$estatus[3],
					"1.0",
					"12-12-2012",
					$desarrolladores[3]);

	$aplicaciones[] = new Aplicacion("Aplicacion 5",
					"Descripcion aplicacion 5",
					"12-12-2012" ,
					2,
					$comentarios,
					"http://localhost/playstore/apks/aplicacion5.apk",
					2342,
					$iconos[4],
					$categorias[4],
					$estatus[4],
					"1.0",
					"12-12-2012",
					$desarrolladores[4]);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Oh no, Examen práctico</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
	<div class="alert alert-success" role="alert">
		<!-- Imprimir en esta seccion las verificaciones.-->
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6">
				<!--- INICIO DEL FORMULARIO -->
				<form action="index.php" method="GET">
					<table class = "table table-striped table-hover">
						<tr>
							<td>Nombre aplicación:</td>
							<td>
								<input type="text" name="" id="" class="form-control">
							</td>
						</tr>
						<tr>
							<td>Descripción:</td>
							<td>
								<input type="text" name="" id="" class="form-control">
							</td>
						</tr>
						<tr>
							<td>Fecha de publicación:</td>
							<td>
								<input type="text" name="" id="" class="form-control">
							</td>
						</tr>
						<tr>
							<td>Calificación promedio:</td>
							<td>
								<input type="text" name="" id="" class="form-control">
							</td>
						</tr>
						<tr>
							<td>URL:</td>
							<td>
								<input type="text" name="" id="" class="form-control">
							</td>
						</tr>
						<tr>
							<td>Tamaño archivo:</td>
							<td>
								<input type="text" name="" id="" class="form-control">
							</td>
						</tr>
						<tr>
							<td>Icono:</td>
							<td>
								<select name="" id="" class="form-control">
									<?php 
									for ($i=0;$i<count($iconos);$i++)
										echo '<option value="'.$iconos[$i]->getURLImagen().'">'.$iconos[$i]->getURLImagen().'</option>';
									?>		
								</select>
							</td>
						</tr>
						<tr>
							<td>Categorias:</td>
							<td>
								<?php
									for($i=0;$i<count($categorias);$i++)
										echo '<label><input type="checkbox" name="" id="" 
										value="'.$categorias[$i].'">'.$categorias[$i].'</label><br>';
								
								?>
							</td>
						</tr>
						<tr>
							<td>Version:</td>
							<td>
								<input type="text" name="" id="" class="form-control">
							</td>
						</tr>
						<tr>
							<td>Fecha de actualización:</td>
							<td>
								<input type="text" name="" id="" class="form-control">
							</td>
						</tr>
						<tr>
							<td>Desarrollador:</td>
							<td>
								<select name="" id="" class="form-control">
									<?php 
										for ($i=0;$i<count($desarrolladores);$i++)
											echo '<option value="'.$desarrolladores[$i]->getNombreUsuario().'">'.$desarrolladores[$i]->getNombreUsuario().'</option>';
									?>	
								</select>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<input type="submit" name="btn-guardar" 
								value="Guardar" class="btn btn-primary">
								<input type="reset" name="btn-limpiar" 
								value="Limpiar" class="btn btn-warning">
							</td>
						</tr>
					</table>
				</form>
				<!--- FIN DEL FORMULARIO -->
			</div>
			<!--Listado de las aplicaciones-->
			<div class="col-lg-6">
				<div class="row">
					<!-- Inicio de la lista de aplicaciones -->
					<!-- en esta parte debe codificar -->
					<?php 
						for ($i=0;$i<count($aplicaciones);$i++) {
					?>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
							<div class="well">
								<img src="<?php echo $aplicaciones[$i]->getIcono()->getURLImagen(); ?>" class="img-responsive">
								<b><?php echo $aplicaciones[$i]->getNombreProducto(); ?></b><br>
								<span class="label label-primary"><?php echo $aplicaciones[$i]->getCalificacionPromedio(); ?></span>
								<?php 
									for ($j=0;$j<$aplicaciones[$i]->getCalificacionPromedio();$j++)
										echo '<span class="glyphicon glyphicon-star" aria-hidden="true"></span>';
								?>
								<br>
								<?php echo $aplicaciones[$i]->getDescripcion(); ?><br>
								Versión: <b><?php echo $aplicaciones[$i]->getVersion(); ?></b><br>
								<a href="<?php echo $aplicaciones[$i]->getURLProducto(); ?>">Descargar</a>
							</div>
						</div>
					<?php
						}
					?>
					<!-- Fin de la lista de aplicaciones -->
				</div>
			</div>
		</div>
	</div>
	<br><br>
	<hr>
	
	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>