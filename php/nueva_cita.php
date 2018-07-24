<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Nueva Cita</title>
		<link rel="stylesheet" href="../css/style.css">
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
					menu_sub_citas();
				?>
			</nav>
		</header>
		<main>
			<h2>Introducir Cita</h2>
			<section id="noticias">
				<form action="comprueba_nueva_cita.php" method="POST">
					<label>Fecha</label>
					<input type="date" name="fecha">
					<label>Hora</label>
					<input type="time" name="hora">
					<label>Lugar</label>
					<input type="text" name="lugar">
					<label>Motivo</label>
					<input type="text" name="motivo">
					<label>ID cliente</label>
					<input type="number" name="idcliente">
					<input type="submit">
				</form>
			</section>	
		</main>
		<footer>
			<?php footer(); ?>
		</footer>
	</body>
</html>
