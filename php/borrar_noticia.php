<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Borrar Noticia</title>
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
			<h3 align="center">Seleccione la noticia que desa eliminar</h3>
			<?php
				borrar_noticia();
			?>	
		</form>
		</main>
		<footer>
			<?php footer(); ?>
		</footer>
	</body>
</html>