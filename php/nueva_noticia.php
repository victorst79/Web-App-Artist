<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Nueva Noticia</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	</head>
	<body>
		<header>
			<nav>
				<?php
					include "./funciones.php";
					menu_loged();
				?>				
			</nav>
			<nav>
				<?php 
					menu_sub_noticias();
				?>
			</nav>
		</header>
		<main>
			<h3 align="center">Nueva Noticia</h3>
			<form action="comprueba_noticia.php" method="POST" enctype="multipart/form-data">
			<label>Titulo</label>
			<input type="text" name="titulo">
			<label>Contenido de la noticia</label>
			<input type="text" name="contenido">
			<label>Imagen de la noticia</label>
			<input type="file" name="archivo">
			<label>Fecha</label>
			<input type="date" name="fecha">
			<input type="number" name="id">
			<input type="submit">
		</form>
		</main>
		<footer>
			<?php footer(); ?>
		</footer>
	</body>
</html>