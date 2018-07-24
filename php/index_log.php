<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Inicio - Admin</title>
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
		</header>
		<main>
			<section id="image">
				<div>
					<?php image_log();  ?>
				</div>
			</section>
			<section id="noticias">
				<h1>ULTIMAS NOTICIAS</h1>
				<?php tres_noticias_log(); ?>
			</section>	
		</main>
		<footer>
			<?php footer(); ?>
		</footer>
	</body>
</html>
