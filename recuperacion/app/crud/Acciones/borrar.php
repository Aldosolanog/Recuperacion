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
$nombre = $_POST["alv"];
$id = $_POST["id"];

//se eleminina de la tabla info
$consulta = "DELETE FROM info_usuarios WHERE 
nombre = '".$nombre."'";

//se elimina de la tabla antecedentes
$consulta2 = "DELETE FROM antecedentes WHERE 
ID = '".$id."'";
//variable con el resulktado de la validacion
$validar = mysqli_query($conn, $consulta) or die (" error al borrar los datos");

$validar2 = mysqli_query($conn, $consulta2) or die (" error al borrar los datos");

mysqli_close($conn);
echo "se elimino a " .$nombre;
?>