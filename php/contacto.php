<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Contacto</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	</head>
	<body>
		<header>
			<nav>
				<?php
					include "./funciones.php";
					menu_no_log(); 
				?>				
			</nav>
		</header>
		<main>
			<section id="formulario">
				<h2 align="center">Contacta con Nosotros</h2>
				<form>
					<label >Nombre:</label>
					<input type="text" placeholder="Indique su Nombre">
					<label >E-Mail:</label>
					<input type="email" placeholder="Indique su E-Mail">
					<label >Su Mensaje:</label>
					<textarea name="" id="" cols="30" rows="10"></textarea>
					<input type="submit" value="Enviar">
				</form>
			</section>
		</main>
		<footer>
			<?php footer(); ?>
		</footer>
	</body>
</html>
