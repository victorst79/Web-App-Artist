<?php

	include "./funciones.php";

	// CONTROL DE NUEVA NOTICIA
	$titulo = $_POST['titulo'];
	$id_noticia = $_POST['id'];
	$contenido = $_POST['contenido'];
	$fecha = $_POST['fecha'];


	$temp_imagen_noticia = $_FILES['imagen']['tmp_name'];
	$type = $_FILES['imagen']['type'];

	if( !file_exists("../img/noticias/") ){
		mkdir("noticias");
	}

	// Controlador formatos
	if ($type == "image/jpeg") {
		$type = ".jpeg";
	}elseif ($type == "image/png") {
		$type = ".png";
	}

	$nombre_imagen = "$id_noticia"."$type";

	move_uploaded_file($temp_imagen_noticia, "../img/noticias/$id_noticia$type");

	$connect = connect_bd();

	$datos = "INSERT INTO noticias 
	VALUES ( $id_noticia , '$titulo' , '$nombre_imagen' , '$contenido' , '$fecha' )";

	mysqli_query( $connect , $datos );

	mysqli_close($connect);

	header("Location: ./noticias_log.php")
?>