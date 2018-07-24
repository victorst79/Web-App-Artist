<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Nuevo Trabajo</title>
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
					menu_sub_trabajos();
				?>
			</nav>
		</header>
		<main>
			<h3 align="center">Nuevo Trabajo</h3>
			<form action="comprueba_trabajo.php" method="POST" enctype="multipart/form-data">
				<label>ID noticia</label>
				<input type="number" name="id">
				<label>Imagen</label>
				<input type="file" name="imagen">
				<label>Titulo</label>
				<input type="text" name="titulo">
				<label>Descripcion</label>
				<input type="text" name="descripcion">
				<label>Fecha</label>
				<input type="date" name="fecha">
				<label>ID cliente</label>
				<input type="number" name="idcliente">
				<input type="submit">
			</form>
		</main>
		<footer>
			<?php footer(); ?>
		</footer>
	</body>
</html>