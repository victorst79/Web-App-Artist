<?php

	include "./funciones.php";

	// CONTROL DE NUEVO TRABAJO
	$id_trabajo = $_POST['id'];
	$titulo = $_POST['titulo'];
	$descripcion = $_POST['descripcion'];
	$fecha = $_POST['fecha'];
	$id_cliente = $_POST['idcliente'];


	$temp_imagen_trabajo = $_FILES['imagen']['tmp_name'];
	$type = $_FILES['imagen']['type'];

	if( !file_exists("../img/trabajos/") ){
		mkdir("trabajos");
	}

	// Controlador formatos
	if ($type == "image/jpeg") {
		$type = ".jpeg";
	}elseif ($type == "image/png") {
		$type = ".png";
	}

	$nombre_imagen = "$id_trabajo"."$type";

	move_uploaded_file( $temp_imagen_trabajo , "../img/trabajos/$id_trabajo$type");

	$connect = connect_bd();

	$datos = "INSERT INTO trabajos 
	VALUES ( $id_trabajo , '$nombre_imagen' , '$titulo' , '$descripcion' , '$fecha' , $id_cliente )";

	mysqli_query( $connect , $datos );

	mysqli_close( $connect );

	header("Location: ./trabajos_log.php");
?>