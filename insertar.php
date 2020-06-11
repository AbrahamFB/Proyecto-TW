<?php 
include("conexionDB.php");

$array2=Array();


$usuario=$_POST['nombreusuario'];
$idioma=$_POST['idioma'];
$clasificacion=$_POST['clasificacion'];
//$=$_POST['avatar'];
///$id_cuenta=$_POST['id_cuenta'];
$rutaA=$_POST['ruta'];
/*
$nombre=$_FILES['avatar']['name'];
$tipo=$_FILES['avatar']['type'];
$tamano=$_FILES['avatar']['size'];

if($tamano<=10000000){
    $carpeta_destino= $_SERVER['DOCUMENT_ROOT'].'/webalizer/uploads';
    move_uploaded_file($_FILES['avatae']['tmp_name'],$carpeta_destino.$nombre);
}
else 
    echo "El tamaño es demasiado grande";

$archivo_objetivo = fopen($carpeta_destino.$nombre,"r");
$contenido = fread($archivo_objetivo,$tamano);
fclose($archivo_objetivo);
*/

$con=mysqli_connect($host_db,$user_db,$pass_db,$db_name);
$nombreRepetido=0;
if(isset($_POST))
    $userName=(string)$_POST['nombreusuario'];
    $consulta=mysqli_query($con,'SELECT* FROM perfil where usuario="'.strtolower($userName).'"');
    if ($consulta->num_rows > 0) {
        echo '0';
    }
    else{
        $consultaI=mysqli_query($con,"SELECT idIdioma from idioma where nombre='$idioma'");
        $idIdioma=mysqli_fetch_assoc($consultaI);

    $idI=$idIdioma['idIdioma'];
    $consultaC=mysqli_query($con,"SELECT idClasificacion from clasificacion where tipo='$clasificacion'");
    $idClas=mysqli_fetch_assoc($consultaC);
    $idC=$idClas['idClasificacion'];
    $insert=mysqli_query($con,"INSERT INTO `perfil`(`usuario`, `idCuenta`, `idIdioma`,`rutaAvatar`) 
    VALUES ('$usuario','1','$idI','$rutaA')");
    if(mysqli_affected_rows($con))
        echo '1';
    else
        echo '0';
    } 

mysqli_close($con);

?>