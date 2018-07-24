<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Buscar Trabajo</title>
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
					menu_sub_trabajos();
				?>
			</nav>
		</header>
		<main>
			<?php
				// CONTROL DE Busqueda de trabajo con fecha
				$connect = connect_bd();

				$fecha = $_POST['fecha'];

				$consulta_fecha = "SELECT *
				FROM trabajos 
				WHERE fecha = '$fecha'";
				
				$resultado = mysqli_query( $connect , $consulta_fecha );
				$fila = mysqli_fetch_array( $resultado , MYSQLI_ASSOC );
				
				echo "<h2>$fila[titulo]</h2>";
				echo "<img src='../img/trabajos/$fila[imagen]'>";
				echo "<p>$fila[descripcion]</p>";
				echo "<small>Fecha de la publicacion: $fila[fecha]</small";


				mysqli_close($connect);
			?>
		</main>
		<footer>
			<?php footer(); ?>
		</footer>
	</body>
</html>