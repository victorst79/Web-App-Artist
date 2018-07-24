<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Buscar Cliente</title>
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
			<h3 align="center">Busqueda de Cliente</h3>
			<form action='comprueba_busqueda_cliente.php' method='POST'>
				<label>Nombre del cliente</label>
				<input type='text' name='nombre'>
				<input type='submit'>			
			</form>
			<form action='comprueba_busqueda_cliente_apellido.php' method='POST'>
				<label>Apellido del cliente</label>
				<input type='text' name='apellido'>
				<input type='submit'>			
			</form>
			<form action='comprueba_busqueda_cliente_telefono.php' method='POST'>
				<label>Telefono del cliente</label>
				<input type='text' name='telefono'>
				<input type='submit'>			
			</form>
		</main>
		<footer>
			<?php footer(); ?>
		</footer>
	</body>
</html>