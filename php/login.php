<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Inicio de Sesion</title>
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
			<h2 align="center">Inicio de Sesion</h2>
			<section id="login">
				<form action="./comprueba_log.php" method="POST">
					<label >Usuario</label>
					<input type="text" placeholder="Usuario" name="user">
					<label >Contraseña</label>
					<input type="password" placeholder="Contraseña" name="pass">
					<input type="submit" value="Enviar" id="enviar">
				</form>
			</section>
		</main>
		<footer>
			<?php footer(); ?>
		</footer>
	</body>
</html>
