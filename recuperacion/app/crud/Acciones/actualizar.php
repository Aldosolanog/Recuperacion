<?php
//se declaran las variables
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "dbusuarios";

//conexion a la base de datos
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

//posible error al conectar
if(!$conn){
	die("No hay conexion: ".mysqli_connect_error());
}
$nombre = $_POST["actualizar"];

$consulta = "SELECT * FROM info_usuarios WHERE 
nombre = '".$nombre."'";

//variable con el resulktado de la validacion
$validar = mysqli_query($conn, $consulta) or die (" error al consultar los datos");
$nr = mysqli_num_rows($validar);

$extraido = mysqli_fetch_array($validar);
//extraemos el ID
$id = $extraido['ID'];

//extraemos los antecedentes
$consulta2 = "SELECT * FROM antecedentes WHERE 
ID = '".$id."'";
$antecedentes = mysqli_query($conn, $consulta2);
//y los almacenamos
$extraido2 = mysqli_fetch_array($antecedentes);

//si hay una columna significa que existe un usuario
if($nr == 1){
	require("Acciones/tablaAct.html");

//si es 0 si que no hay concidencias y regresa al login
}else if( $nr == 0){
	echo "no existe la persona";
}
mysqli_close($conn);
?>
