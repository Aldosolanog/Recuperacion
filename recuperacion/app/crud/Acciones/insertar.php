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


//se almacenan las variables insertadas
$fecha_elab = $_POST["fecha_elab"];
$nombre = $_POST["nombre"];
$genero = $_POST["genero"];
$edad = $_POST["edad"];
$fecha_de_nacimiento = $_POST["fecha_nacimiento"];
$ocupacion = $_POST["ocupacion"];
$lateralidad = $_POST["lateralidad"];
$nacionalidad = $_POST["nacionalidad"];
$religion = $_POST["religion"];
$telefono = $_POST["telefono"];
$domicilio = $_POST["domicilio"];
$telefono_sos = $_POST["telefono_sos"];
$contacto = $_POST["contacto"]; 

$neo = $_POST["r1"];
$neoplacias = $_POST["neoplacias"];
$hmneo = $_POST["r2"];

$tub = $_POST["r3"];
$tuberculosis = $_POST["tuberculosis"];
$hmtub = $_POST["r4"];


$dia = $_POST["r5"];
$diabetes = $_POST["diabetes"];
$hmdia = $_POST["r6"];

$art = $_POST["r7"];
$artritis = $_POST["artritis"];
$hmart = $_POST["r8"];

$car = $_POST["r9"]; 
$cardiopatias = $_POST["cardiopatias"];
$hmcar = $_POST["r10"]; 

$Neu = $_POST["r11"];
$Neurobiologicas = $_POST["Neurobiologicas"];
$hmNeu = $_POST["r12"];

$tra = $_POST["r13"];
$trastornos = $_POST["trastornos"];
$hmtra = $_POST["r14"];

$res = $_POST["r15"];
$respiratorias = $_POST["respiratorias"];
$hmres = $_POST["r16"];

$hep = $_POST["r17"];
$hepatopatias = $_POST["hepatopatias"];
$hmhep = $_POST["r18"];

$ale = $_POST["r19"]; 
$alergias = $_POST["alergias"];
$hmale = $_POST["r20"]; 


$hip = $_POST["r21"];
$hipertension = $_POST["hipertension"];
$hmhip = $_POST["r22"];

$hem = $_POST["r23"];
$hematologicas = $_POST["hematologicas"];
$hmhem = $_POST["r24"];

$hen = $_POST["r25"];
$hendocrinologicas = $_POST["hendocrinologicas"];
$hmhen = $_POST["r26"];

$gen = $_POST["r27"];
$geneticas = $_POST["geneticas"];
$hmgen = $_POST["r28"];

$otr = $_POST["r29"]; 
$otros = $_POST["otros"];
$hmotr = $_POST["r30"]; 



//echo $nombre;

    //variable con la consulta
$query = "INSERT INTO `info_usuarios` (`fecha_elab`, `nombre`, `genero`, `edad`, `fecha_de_nacimiento`, `ocupacion`,
 `lateralidad`, `nacionalidad`, `religion`, `telefono`, `domicilio`, `telefono_sos`, `contacto`)
 VALUES ('".$fecha_elab."' , '".$nombre."'  , '".$genero."' , '".$edad."' , '".$fecha_de_nacimiento."' , '".$ocupacion."' , 
 '".$lateralidad."' , '".$nacionalidad."', '".$religion."' , '".$telefono."', '".$domicilio."' , '".$telefono_sos."' , '".$contacto."')";

$query2 = "INSERT INTO `antecedentes` (`neo`, `neoplacias`, `hmneo`, `tub`, `tuberculosis`, `hmtub`, `dia`, `diabetes`, `hmdia`,
 `art`, `artritis`, `hmart`, `car`, `cardiopatias`, `hmcar`, `neu`, `Neurobiologicas`, `hmneu`, `tra`, `trastornos`, `hmtra`,
  `res`, `respiratorias`, `hmres`, `hep`, `hepatopatias`, `hmhep`, `ale`, `alergias`, `hmale`, `hip`, `hipertension`, `hmhip`,
   `hem`, `hematologicas`, `hmhem`, `hen`, `hendocrinologicas`, `hmhen`, `gen`, `geneticas`, `hmgen`, `otr`, `otros`, `hmotr`) 
   VALUES ('".$neo."' , '".$neoplacias."'  , '".$hmneo."' , '".$tub."' , '".$tuberculosis."' , '".$hmtub."','".$dia."' ,
    '".$diabetes."'  , '".$hmdia."' , '".$art."' , '".$artritis."' , '".$hmart."', '".$car."',
    '".$cardiopatias."' , '".$hmcar."'  , '".$Neu."' , '".$Neurobiologicas."' , '".$hmNeu."' , '".$tra."','".$trastornos."' ,
    '".$hmtra."'  , '".$res."' , '".$respiratorias."' , '".$hmres."' , '".$hep."', '".$hepatopatias."',
    '".$hmhep."' , '".$ale."'  , '".$alergias."' , '".$hmale."' , '".$hip."' , '".$hipertension."','".$hmhip."' ,
    '".$hem."'  , '".$hematologicas."' , '".$hmhem."' , '".$hen."' , '".$hendocrinologicas."', '".$hmhen."',
    '".$gen."'  , '".$geneticas."' , '".$hmgen."' , '".$otr."' , '".$otros."', '".$hmotr."')";

//variable con el resulktado de la validacion
$insertar = mysqli_query($conn, $query) or die (" error al insertar los datos");
$insertar2 = mysqli_query($conn, $query2) or die (" error al insertar los datos");

mysqli_close($conn);
header("location: Formulario_usu.php");
echo "Datos insertados correctamente";

//mysqli_close($conn);

?>