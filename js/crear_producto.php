<?php
header('Content-Type: text/html; charset=utf-8');
sleep(1);
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$dbname='tienda';

$codigo=$_REQUEST['codigo'];
$nombre=$_REQUEST['nombre'];
$precio=$_REQUEST['precio'];
$stock=$_REQUEST['stock'];


$conexion=mysqli_connect($dbhost,$dbuser,$dbpass) or die("<h3>***Error al conectar</h3>". mysqli_error($conexion));
     
mysqli_select_db($conexion,$dbname) or die("<h3>Error al selecionar la BD</h3>".mysqli_error($conexion));


$query="INSERT INTO Productos (codigo,nombre,precio,unidades) values ('$codigo','$nombre','$precio','$stock');";
$result=mysqli_query($conexion,$query) or die("<h3>Error en insertar</h3>".mysqli_error($conexion));

echo  0;



?>