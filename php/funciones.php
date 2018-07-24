<?php
	// Funcion Menu normal
	function menu_index(){
		echo "<ul> <li> <a href='./index.php'> INICIO </a> </li>";
		echo "<li><a href='./php/contacto.php'> CONTACTO </a></li>";
		echo "<li><a href='./php/login.php'> LOG IN </a></li></ul>";
	}

	// Funcion menu para contacto y login
	function menu_no_log(){
		echo "<ul> <li> <a href='../index.php'> INICIO </a> </li>";
		echo "<li><a href='./contacto.php'> CONTACTO </a></li>";
		echo "<li><a href='./login.php'> LOG IN </a></li> </ul>";
	}

	// Funcion Menu para noticias sin logear
	function menu_noticias(){
		echo "<ul> <li> <a href='../index.php'> INICIO </a> </li>";
		echo "<li><a href='../php/contacto.php'> CONTACTO </a></li>";
		echo "<li><a href='../php/login.php'> LOG IN </a></li></ul>";
	}

	// Funcion Sub Menu noticias
	function menu_sub_noticias(){
		echo "<ul>";
		echo "<li><a href='./nueva_noticia.php'> NUEVA </a></li>";
		echo "<li><a href='./buscar_noticia.php'> BUSCAR </a></li>";
		echo "<li><a href='./borrar_noticia.php'> BORRAR </a></li>";
		echo "</ul>";
	}
	
	// Funcion imagen aleatoria
	function image(){
		$num = mt_rand( 1 , 6 );
		echo "<img src='./img/trabajos/$num.jpg'>";
	}

	// Funcion imagen aleatoria LOG
	function image_log(){
		$num = mt_rand( 1 , 6 );
		echo "<img src='../img/trabajos/$num.jpg'>";
	}

	// Funcion menu de usuario
	function menu_loged(){
		echo "<ul> <li> <a href='./index_log.php'> INICIO </a> </li>";
		echo "<li><a href='./noticias_log.php'> NOTICIAS </a></li>";
		echo "<li><a href='./clientes_log.php'> CLIENTES </a></li>";
		echo "<li><a href='./trabajos_log.php'> TRABAJOS </a></li>";
		echo "<li><a href='./citas_log.php'> CITAS </a></li>";
		echo "<li><a href='./contacto_log.php'> CONTACTO </a></li>";
		echo "<li><a href='../index.php'> SALIR </a></li></ul>";
	}

	// Funcion menu de usuario en noticias LOG
	function menu_noticias_loged(){
		echo "<ul> <li> <a href='../php/index_log.php'> INICIO </a> </li>";
		echo "<li><a href='../php/noticias_log.php'> NOTICIAS </a></li>";
		echo "<li><a href='../php/clientes_log.php'> CLIENTES </a></li>";
		echo "<li><a href='../php/trabajos_log.php'> TRABAJOS </a></li>";
		echo "<li><a href='../php/citas_log.php'> CITAS </a></li>";
		echo "<li><a href='../php/contacto_log.php'> CONTACTO </a></li>";
		echo "<li><a href='../index.php'> SALIR </a></li></ul>";
	}


	// Funcion SUBMENU CLIENTES
	function menu_sub_clientes(){
		echo "<ul>";
		echo "<li><a href='./nuevo_cliente.php'> NUEVO </a></li>";
		echo "<li><a href='./buscar_cliente.php'> BUSCAR </a></li>";
		echo "</ul>";
	}

	// Funcion SUBMENU trabajos
	function menu_sub_trabajos(){
		echo "<ul>";
		echo "<li><a href='./nuevo_trabajo.php'> NUEVO </a></li>";
		echo "<li><a href='./buscar_trabajo.php'> BUSCAR </a></li>";
		echo "<li><a href='./borrar_trabajo.php'> BORRAR </a></li>";
		echo "</ul>";
	}

	// Funcion SUBMENU citas
	function menu_sub_citas(){
		echo "<ul>";
		echo "<li><a href='./nueva_cita.php'> NUEVO </a></li>";
		echo "<li><a href='./actualizar_cita.php'> ACTUALIZAR </a></li>";
		echo "<li><a href='./borrar_cita.php'> BORRAR </a></li>";
		echo "</ul>";
	}

	// Conexion base de datos
	function connect_bd(){
		$DB = mysqli_connect('localhost', 'root', '', 'agenda');
		mysqli_set_charset( $DB , 'utf8' );
		return $DB;
	}

	// Funciones Ultimas tres noticias
	function tres_noticias(){

		$connect = connect_bd();
		$consulta = "SELECT * 
					FROM noticias 
					ORDER BY fecha DESC 
					LIMIT 3";
		$resultado = mysqli_query( $connect , $consulta );

		for ( $r = 0; $r <3 ; $r++){

			$fila = mysqli_fetch_array( $resultado, MYSQLI_ASSOC );
			echo "<h1>$fila[titular]</h1>";
			echo "<img src='./img/noticias/$fila[imagen]'><br><br>";
			echo "<form action='./noticias/noticia_$r.php' method='post'>";
			echo "<input type='hidden' name='id' value='$fila[id]'>";
			echo "<input type='submit' name='enviar' value='Ver mas...'>";
			echo "</form>";

		}

		mysqli_close($connect);
	}

	// Funciones Ultimas tres noticias LOG
	function tres_noticias_log(){

		$connect = connect_bd();
		$consulta = "SELECT * 
					FROM noticias 
					ORDER BY fecha DESC
					LIMIT 3";
		$resultado = mysqli_query( $connect , $consulta );

		for ( $r = 0; $r < 3 ; $r++){

			$fila = mysqli_fetch_array( $resultado, MYSQLI_ASSOC );
			echo "<h1>$fila[titular]</h1>";
			echo "<img src='../img/noticias/$fila[imagen]'><br><br>";
			echo "<form action='../noticias_log/noticia_$r.php' method='post'>";
			echo "<input type='hidden' name='id' value='$fila[id]'>";
			echo "<input type='submit' name='enviar' value='Ver mas...'>";
			echo "</form>";

		}

		mysqli_close($connect);
	}

	// Funciones TODAS LAS NOTICIAS LOG
	function noticias_log(){

		$connect = connect_bd();
		$consulta = "SELECT * 
					FROM noticias 
					ORDER BY fecha DESC";
		$resultado = mysqli_query( $connect , $consulta );

		for ( $r = 0; $r < 8 ; $r++){

			$fila = mysqli_fetch_array( $resultado, MYSQLI_ASSOC );
			echo "<h1>$fila[titular]</h1>";
			echo "<img src='../img/noticias/$fila[imagen]'><br><br>";
			echo "<form action='../noticias_log/noticia_$r.php' method='post'>";
			echo "<input type='hidden' name='id' value='$fila[id]'>";
			echo "<input type='submit' name='enviar' value='Ver mas...'>";
			echo "</form>";

		}

		mysqli_close($connect);
	}
	// Funcione NOTICIAS BORRAR
	function borrar_noticia(){
		$connect = connect_bd();
		$consulta = "SELECT * 
					FROM noticias 
					ORDER BY fecha DESC";
		$resultado = mysqli_query( $connect , $consulta );

		for ( $r = 0; $r < 8 ; $r++){

			$fila = mysqli_fetch_array( $resultado, MYSQLI_ASSOC );
			echo "<form action='./comprueba_borrado.php' method='post'>";
			echo "<h1>$fila[titular]</h1>";
			echo "<img src='../img/noticias/$fila[imagen]'>";
			echo "<input type='hidden' name='id' value='$fila[id]'>";
			echo "<input type='submit' name='enviar' value='Borrar Noticia'>";
			echo "</form>";
			echo "<br><br>";

		}

		mysqli_close($connect);
	}

	// Funcione TRABAJOS BORRAR
	function borrar_trabajos(){
		$connect = connect_bd();
		$consulta = "SELECT * 
					FROM trabajos
					ORDER BY fecha DESC";
		$resultado = mysqli_query( $connect , $consulta );

		for ( $r = 0; $r < 8 ; $r++){

			$fila = mysqli_fetch_array( $resultado, MYSQLI_ASSOC );
			echo "<form action='./comprueba_borrado_trabajo.php' method='post'>";
			echo "<h1>$fila[titulo]</h1>";
			echo "<img src='../img/trabajos/$fila[imagen]'>";
			echo "<input type='hidden' name='id' value='$fila[id]'>";
			echo "<input type='submit' name='enviar' value='Borrar Noticia'>";
			echo "</form>";
			echo "<br><br>";

		}

		mysqli_close($connect);
	}

	// funcion TODOS LOS USUARIOS
	function todos_usuarios(){
		$connect = connect_bd();
		$consulta = "SELECT * FROM clientes";
		$resultado = mysqli_query( $connect , $consulta );

		echo "<table border='1' cellspading='0' cellspacing='0'>";
				echo "<tr>";
					echo "<td>ID</td>";
					echo "<td>Nombre</td>";
					echo "<td>Apellidos</td>";
					echo "<td>Direccion</td>";
					echo "<td>Telefono 1</td>";
					echo "<td>Telefono 2</td>";
				echo "</tr>";
			for( $r = 0; $r <= 9; $r++ ){
				$fila = mysqli_fetch_array( $resultado , MYSQLI_ASSOC );

				echo "<tr>";
					echo "<td>$fila[id]</td>";
					echo "<td>$fila[nombre]</td>";
					echo "<td>$fila[apellidos]</td>";
					echo "<td>$fila[direccion]</td>";
					echo "<td>$fila[telefono1]</td>";
					echo "<td>$fila[telefono2]</td>";
				echo "</tr>";
				
			}
		echo "</table>";

		mysqli_close($connect);
	}

	// FUNCION clientes log
	function todos_trabajos(){
		$connect = connect_bd();
		$consulta = "SELECT * FROM trabajos";
		$resultado = mysqli_query( $connect , $consulta );

			for( $r = 0; $r <= 7; $r++ ){
				$fila = mysqli_fetch_array( $resultado , MYSQLI_ASSOC );
				echo "<img src='../img/trabajos/$fila[imagen]' class='trabajos'>";
				echo "<h2>$fila[titulo]</h2>";
				echo "<p>$fila[descripcion]</p>";
				echo "<small>Fecha del trabajo: $fila[fecha]</small>";
				echo "<br><br>";
				
				
			}

		mysqli_close($connect);
	}

	// FUNCION todas las citas
	function todas_citas(){
		$connect = connect_bd();
		$consulta = "SELECT citas.* , clientes.nombre
		FROM clientes,citas
		WHERE citas.id_cliente = clientes.id";

		$resultado = mysqli_query( $connect , $consulta );

			for( $r = 0; $r <= 7; $r++ ){
				$fila = mysqli_fetch_array( $resultado , MYSQLI_ASSOC );
				
				echo "<h2>$fila[lugar]</h2>";
				echo "<p>$fila[motivo]</p>";
				echo "<small>Fecha del trabajo: $fila[fecha]</small>";
				echo "<small>Hora del trabajo: $fila[hora]</small>";
				echo "<small>Id del cliente: $fila[nombre]</small>";
				echo "<br><br>";		
				
			}

		mysqli_close($connect);
	}

	// Funcion Footer
	function footer(){
		echo "<small> Victor Santaella Torres &copy; </small>";
	}

?>