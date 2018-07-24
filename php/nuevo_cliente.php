<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Nuevo Cliente</title>
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
					menu_sub_clientes();
				?>
			</nav>
		</header>
		<main>
			<h3 align="center">Nuevo Cliente</h3>
			<form action="comprueba_cliente.php" method="POST">
				<label>ID cliente</label>
				<input type="text" name="id">
				<label>Nombre</label>
				<input type="text" name="nombre">
				<label>Apellidos</label>
				<input type="text" name="apellidos">
				<label>Direccion</label>
				<input type="text" name="direccion">
				<label>Telefono 1</label>
				<input type="number" name="telefono1">
				<label>Telefono 2</label>
				<input type="number" name="telefono2">
				<input type="submit">
			</form>
		</main>
		<footer>
			<?php footer(); ?>
		</footer>
	</body>
</html>