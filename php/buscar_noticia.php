<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Buscar noticia</title>
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
					menu_sub_noticias();
				?>
			</nav>
		</header>
		<main>
			<h3 align="center">Buscar noticia</h3>
			<form action='comprueba_busqueda.php' method='POST'>
				<label>Indica el titulo de la noticia</label>
				<input type='text' name='titulo'>
				<input type='submit'>			
			</form>
		</main>
		<footer>
			<?php footer(); ?>
		</footer>
	</body>
</html>