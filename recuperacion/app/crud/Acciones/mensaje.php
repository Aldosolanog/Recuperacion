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
$nombre = $_POST["borrar"];

$consulta = "SELECT * FROM info_usuarios WHERE 
nombre = '".$nombre."'";

//variable con el resulktado de la validacion
$validar = mysqli_query($conn, $consulta) or die (" error al consultar los datos");
$nr = mysqli_num_rows($validar);

$extraido = mysqli_fetch_array($validar);

//si hay una columna significa que existe un usuario
if($nr == 1){
echo '<div class="mensaje">';
echo '<h5>ID</h5>';
echo '<input type="text" id="mensaje_txt" name="id" value="';
echo $extraido['ID'];
echo '"><p>';
echo '<h5>Nombre</h5>';
echo '<input type="text" id="mensaje_txt" name="alv" value="';
echo $nombre;
echo '"><p>';
echo "¿seguro que quiere eliminar? ";
echo '</p><input type="submit" name= "Acep" value="Aceptar"/>';
echo '<input type="submit" name= "cancelar" value="cancelar"/>';
echo '</div>';
//si es 0 si que no hay concidencias y regresa al login
}else if( $nr == 0){
	echo "no existe la persona";
}
mysqli_close($conn);
?>