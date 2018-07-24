<?php
	include "./funciones.php";

	// CONTROLADOR BORRADO NOTICIAS

	$id = $_POST['id'];
	$connect = connect_bd();
	$borrado = "DELETE FROM trabajos WHERE id = $id";

	mysqli_query( $connect , $borrado );
	header("Location: ./borrar_trabajo.php");
?>