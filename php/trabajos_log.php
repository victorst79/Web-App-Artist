<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Trabajos - Admin</title>
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
					menu_sub_trabajos();
				?>
			</nav>
		</header>
		<main>
			<h2>Todos los Trabajos</h2>
			<section id="noticias">
				<?php todos_trabajos(); ?>
			</section>	
		</main>
		<footer>
			<?php footer(); ?>
		</footer>
	</body>
</html>
