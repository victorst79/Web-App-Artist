<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Clientes - Admin</title>
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
					menu_sub_clientes();
				?>
			</nav>
		</header>
		<main>
			<h2>Todos los clientes</h2>
			<section id="noticias">
				<?php todos_usuarios(); ?>
			</section>	
		</main>
		<footer>
			<?php footer(); ?>
		</footer>
	</body>
</html>
