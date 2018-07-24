<?php
header('Content-Type: text/hmtl; charset=utf-8');
sleep(1);
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$dbname='tienda';




$conexion=mysqli_connect($dbhost,$dbuser,$dbpass) or die("<h3>***Error al conectar</h3>". mysqli_error($conexion));
     
mysqli_select_db($conexion,$dbname) or die("<h3>Error al selecionar la BD</h3>".mysqli_error($conexion));


$query="SELECT * FROM Productos";
$result=mysqli_query($conexion,$query) or die("<h3>Error en la consulta</h3>".mysqli_error($conexion));
 
$json='[';

$cont=0;

while($fila=mysqli_fetch_row($result))
{
  $json.='{"codigo":"'.$fila[0].'","nombre":"'.$fila[1].'", "precio":'.$fila[2].', "unidades":'.$fila[3].'}';	
  $cont++;
  if($cont<mysqli_num_rows($result))
  {
    $json.=',';
  } 
  

}

$json.=']';


echo $json;



?>