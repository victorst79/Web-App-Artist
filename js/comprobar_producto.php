<?php
header('Content-Type: text/html; charset=utf-8');
sleep(1);
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$dbname='tienda';

$codigo=$_REQUEST['codigo'];



$conexion=mysqli_connect($dbhost,$dbuser,$dbpass) or die("<h3>***Error al conectar</h3>". mysqli_error($conexion));
     
mysqli_select_db($conexion,$dbname) or die("<h3>Error al selecionar la BD</h3>".mysqli_error($conexion));


$query="SELECT * FROM Productos WHERE codigo='$codigo'";
$result=mysqli_query($conexion,$query) or die("<h3>Error en la consulta</h3>".mysqli_error($conexion));


	
if(mysqli_num_rows($result)>0)
{
	echo -1;   

}else{
	echo 0;
}

 



?>