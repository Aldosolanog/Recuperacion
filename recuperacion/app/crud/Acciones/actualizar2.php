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
$ID = $_POST["ID"];
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

//datos de antecedentes
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


$actualizar = "UPDATE `info_usuarios` SET `fecha_elab` = '".$fecha_elab."', `nombre` = '".$nombre."',
         `genero` = '".$genero."', `edad` = '".$edad."', `fecha_de_nacimiento` = '".$fecha_de_nacimiento."', `ocupacion` = '".$ocupacion."',
          `nacionalidad` = '".$nacionalidad."', `religion` = '".$religion."', `telefono` = '".$telefono."', `domicilio` = '".$domicilio."',
           `telefono_sos` = '".$telefono_sos."', `contacto` = '".$contacto."' WHERE ID = '".$ID."'";
        
        $actualizar2 = "UPDATE `antecedentes` SET `neo` = '".$neo."', `neoplacias` = '".$neoplacias."',`hmneo` = '".$hmneo."',
         `tub` = '".$tub."',`tuberculosis` = '".$tuberculosis."', `hmtub` = '".$hmtub."',
          `dia` = '".$dia."', `diabetes` = '".$diabetes."',`hmdia` = '".$hmdia."',
           `art` = '".$art."', `artritis` = '".$artritis."', `hmart` = '".$hmart."',
            `car` = '".$car."', `cardiopatias` = '".$cardiopatias."', `hmcar` = '".$hmcar."',
             `neu` = '".$Neu."',`Neurobiologicas` = '".$Neurobiologicas."', `hmneu` = '".$hmNeu."',
             `tra` = '".$tra."', `trastornos` = '".$trastornos."', `hmtra` = '".$hmtra."',
              `res` = '".$res."', `respiratorias` = '".$respiratorias."', `hmres` = '".$hmres."',
          `hep` = '".$hep."', `hepatopatias` = '".$hepatopatias."', `hmhep` = '".$hmhep."', 
          `ale` = '".$ale."', `alergias` = '".$alergias."', `hmale` = '".$hmale."',
           `hip` = '".$hip."', `hipertension` = '".$hipertension."', `hmhip` = '".$hmhip."',
           `hem` = '".$hem."', `hematologicas` = '".$hematologicas."',`hmhem` = '".$hmhem."',
            `hen` = '".$hen."', `hendocrinologicas` = '".$hendocrinologicas."', `hmhen` = '".$hmhen."',
           `gen` = '".$gen."', `geneticas` = '".$geneticas."', `hmgen` = '".$hmgen."',
           `otr` = '".$otr."', `otros` = '".$otros."', `hmotr` = '".$hmotr."' WHERE ID = '".$ID."'";
         
         //variable con el resulktado de la validacion
         $actua = mysqli_query($conn, $actualizar) or die (" error al actualizar los datos");
         $actua2 = mysqli_query($conn, $actualizar2) or die (" error al actualizar los datos de antecedentes");
         mysqli_close($conn);
?>
