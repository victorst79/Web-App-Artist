<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>
			Ultimas Noticias
		</title>
		<link rel="stylesheet" href="../css/style.css">
	</head>
	<body>
		<header>
			<nav>
				<?php
					include "../php/funciones.php";
					menu_noticias_loged();
				?>	
			</nav>
		</header>
		<main>
			<?php
				
				$id = $_POST['id'];
				$conex = connect_bd();

				$consulta = "select *
							from noticias
							where id=$id";

				$resultado = mysqli_query($conex, $consulta);
				$fila = mysqli_fetch_array($resultado);

				echo "<h3> NOTICIAS </h3>";
				echo "<h1>$fila[titular]</h1><br>";
				echo "<img src='../img/noticias/$fila[imagen]'><br>";
				echo "$fila[contenido]";

				mysqli_close($conex);

			?>
		</main>
			
		<footer>
			<?php 
				footer();
			?>
		</footer>
	</body>
</html>