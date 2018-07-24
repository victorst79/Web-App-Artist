<?php
	include "./funciones.php";

	// CONTROLADOR NUEVOS CLIENTES

	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$direccion = $_POST['direccion'];
	$telefono1 = $_POST['telefono1'];
	$telefono2 = $_POST['telefono2'];

	$connect = connect_bd();
	$cliente = "INSERT INTO clientes
				VALUES ( $id , '$nombre' , '$apellidos' , '$direccion' , $telefono1 , $telefono2)";

	mysqli_query( $connect , $cliente );
	mysqli_close($connect);

	echo "<h1>CLIENTE AÑADIDO</h1>";
	header("Location: ./nuevo_cliente.php");
?>