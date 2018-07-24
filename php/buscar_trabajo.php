<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Buscar Trabajo</title>
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
			<h3 align="center">Busqueda de Trabajos</h3>
			<form action='comprueba_busqueda_trabajo.php' method='POST'>
				<label>Titulo del trabajo</label>
				<input type='text' name='titulo'>
				<input type='submit'>			
			</form>
			<form action='comprueba_busqueda_trabajo_cliente.php' method='POST'>
				<label>Nombre del cliente</label>
				<input type='text' name='nombre'>
				<input type='submit'>			
			</form>
			<form action='comprueba_busqueda_trabajo_fecha.php' method='POST'>
				<label>Fecha del trabajo</label>
				<input type='date' name='fecha'>
				<input type='submit'>			
			</form>
		</main>
		<footer>
			<?php footer(); ?>
		</footer>
	</body>
</html>