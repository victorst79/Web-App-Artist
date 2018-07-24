<?php //configura los datos de tu cuenta
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$dbname='tienda';

$conexion=mysqli_connect($dbhost,$dbuser,$dbpass) or die("<h3>***Error al conectar</h3>". mysqli_error($conexion));

$query="DROP DATABASE IF EXISTS $dbname";
mysqli_query($conexion,$query) or die("<h3>Error al borrar la base de datos</h3>". mysqli_error($conexion));


$query="CREATE DATABASE IF NOT EXISTS $dbname";
mysqli_query($conexion,$query) or die("<h3>Error al crear la base de datos</h3>". mysqli_error($conexion));
 
$query="
   CREATE TABLE IF NOT EXISTS Productos(
      codigo VARCHAR(50),
      nombre VARCHAR(50),
      precio INT(6),
	  unidades INT(6),
	  PRIMARY KEY(codigo)
   );
   ";
  
 mysqli_select_db($conexion,$dbname) or die("<h3>Error al selecionar la BD</h3>".mysqli_error($conexion));

 mysqli_query($conexion,$query) or die("<h3>Error al crear la tabla</h3>". mysqli_error($conexion));
 
 echo "Tabla creada correctamente<br>-----------------------------------------<br>";
 $query= "INSERT INTO Productos (codigo,nombre,precio,unidades) values
															('P001','Raton',9,50),
															('P002','Teclado',5,70),
															('P003','Pantalla',80,100);";
 $result=mysqli_query($conexion,$query) or die("<h3>Error al insertar los datos</h3>". mysqli_error($conexion));
 echo "Datos insertados correctamente<br>--------------------------------------<br>";

 ?>