<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Inicio</title>
		<link rel="stylesheet" href="css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	</head>
	<body>
		<header>
			<nav>
				<?php 
					include "./php/funciones.php";
					menu_index(); 
				?>				
			</nav>
		</header>
		<main>
			<section id="image">				
				<div>
					<?php image();  ?>
				</div>
			</section>
			<section id="noticias">
				<h1>ULTIMAS NOTICIAS</h1>
				<?php tres_noticias(); ?>
			</section>	
		</main>
		<footer>
			<?php footer(); ?>
		</footer>
	</body>
</html>
