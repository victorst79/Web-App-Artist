<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Buscar cliente</title>
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
					menu_sub_clientes();
				?>
			</nav>
		</header>
		<main>
			<?php
				// CONTROL DE Busqueda de clientes por apellido
				$connect = connect_bd();

				$apellido = $_POST['apellido'];

				$consulta_apellido = "SELECT *
				FROM clientes 
				WHERE apellidos = '$apellido'";

				$resultado = mysqli_query( $connect , $consulta_apellido );
				$fila = mysqli_fetch_array( $resultado , MYSQLI_ASSOC );

				echo "<table border='1' cellspading='0' cellspacing='0'>";
					echo "<tr>";
						echo "<td>$fila[id]</td>";
						echo "<td>$fila[nombre]</td>";
						echo "<td>$fila[apellidos]</td>";
						echo "<td>$fila[direccion]</td>";
						echo "<td>$fila[telefono1]</td>";
						echo "<td>$fila[telefono2]</td>";
					echo "</tr>";
				echo "</table>";


				mysqli_close($connect);
				
			?>
		</main>
		<footer>
			<?php footer(); ?>
		</footer>
	</body>
</html>