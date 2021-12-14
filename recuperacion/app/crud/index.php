

<html>

<head>
<link rel="STYLESHEET" type="text/css" href="estilos/usuario.css">
<center><h1>Historial clinico</h1></center>


</head>
<body>
<br><br><br>
<form method="POST" action=""/>
<div class="botones">
<input type="submit" name= "insert" value="Insertar"/>

<?php
 if(isset($_POST['insert'])){
	require("Acciones/tabla.html");
	}
	
if(isset($_POST['Aceptar'])){
	require("Acciones/insertar.php");
	}
?>
<br><br><br>

<input type="submit" name= "select" value="Consultar"/>
<input type="text" name="consulta" size="40"
placeholder="Escriba su consulta">
<?php
if(isset($_POST['select'])){
	if ($_POST['consulta'] != null){
	require("Acciones/consultar.php");
	}else{
		echo "insertar un nombre";
	}
}
?>
<br><br><br>
<input type="submit" name= "update" value="Actualizar"/>
<input type="text" name="actualizar" size="40"
placeholder="Escriba su consulta que desea actualizar">
<?php
if(isset($_POST['update'])){
	if ($_POST['actualizar'] != null){
		require("Acciones/actualizar.php");
	}else{
		echo "insertar un nombre";
	}

	}
	if(isset($_POST['act'])){
	require("Acciones/actualizar2.php");
	
		}
?>

<br><br><br>
<input type="submit" name= "delete" value="eliminar"/>
<input type="text" name="borrar" size="40"
placeholder="Escriba su consulta que desea borrar">
	</div>
<?php
/*if(isset($_POST['delete'])){
	require("Acciones/mensaje.php");
	}*/

	if(isset($_POST['delete'])){
		if ($_POST['borrar'] != null){
			require("Acciones/mensaje.php");
		}else{
			echo "insertar un nombre";
		}
	
		}
		if(isset($_POST['Acep'])){
		require("Acciones/borrar.php");
		
			}
?>


<br><br><br>
<br><br><br>

<center><h3><a href="../inicio.php">cerrar sesion</a></h3></center>
</body>
</html>