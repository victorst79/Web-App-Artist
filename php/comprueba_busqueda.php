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
			<?php
				// CONTROL DE Busqueda de noticia por titular
				$connect = connect_bd();

				$titulo = $_POST['titulo'];

				$consulta = "SELECT *
				FROM noticias 
				WHERE titular = '$titulo'";
				
				$resultado = mysqli_query( $connect , $consulta );
				$fila = mysqli_fetch_array( $resultado , MYSQLI_ASSOC );
				
				echo "<h1>$fila[titular]</h1>";
				echo "<img src='../img/noticias/$fila[imagen]'>";
				echo "<p>$fila[contenido]</p>";
				echo "<small>Fecha de la publicacion: $fila[fecha]</small";
			?>
		</main>
	</body>
</html>