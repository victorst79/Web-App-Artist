<?php
header('Content-Type: text/html; charset=utf-8');
sleep(1);
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$dbname='tienda';

$codigo=$_REQUEST['codigo_comprar'];
$unidades=$_REQUEST['unidades'];


$conexion=mysqli_connect($dbhost,$dbuser,$dbpass) or die("<h3>***Error al conectar</h3>". mysqli_error($conexion));
     
mysqli_select_db($conexion,$dbname) or die("<h3>Error al selecionar la BD</h3>".mysqli_error($conexion));

$query="SELECT unidades FROM Productos WHERE codigo='$codigo'";
$result=mysqli_query($conexion,$query) or die("<h3>Error en la consulta</h3>".mysqli_error($conexion));
 
$fila=mysqli_fetch_row($result);
if($fila[0]>=$unidades)
{
  $query="UPDATE Productos SET unidades=unidades-$unidades WHERE codigo='$codigo'";
  mysqli_query($conexion,$query) or die("<h3>Error en la actualizacion</h3>".mysqli_error($conexion));
  echo 0;
}else{
  echo -1;	
}
  


?>