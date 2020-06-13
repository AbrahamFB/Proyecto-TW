<?php 
include("conexionDB.php");

$array2=Array();


$usuario=$_POST['nombreusuario'];
$idioma=$_POST['idioma'];
$clasificacion=$_POST['clasificacion'];
//$=$_POST['avatar'];
///$id_cuenta=$_POST['id_cuenta'];
$rutaA=$_POST['ruta'];
$idPerfil=$_POST['idPerfil'];
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
if(isset($_POST)){
    $userName=(string)$_POST['nombreusuario'];
    $consulta=mysqli_query($con,'SELECT* FROM perfil where usuario="'.strtolower($userName).'"');
    if ($consulta->num_rows > 0) {
        if($_POST['boton']=='editar'){
            $consulta2=mysqli_query($con,"SELECT usuario FROM perfil where idPerfil='$idPerfil' and usuario='".strtolower($userName)."'");
            if($consulta2->num_rows>0){
                $consultaI=mysqli_query($con,"SELECT idIdioma from idioma where nombre='$idioma'");
                $idIdioma=mysqli_fetch_assoc($consultaI);
                $idI=$idIdioma['idIdioma'];
                $consultaC=mysqli_query($con,"SELECT idClasificacion from clasificacion where tipo='$clasificacion'");
                $idClas=mysqli_fetch_assoc($consultaC);
                $idC=$idClas['idClasificacion'];
                $update=mysqli_query($con,"UPDATE `perfil` SET `usuario`='$usuario',`idIdioma`='$idI',`rutaAvatar`='$rutaA',`idClasificacion`='$idC' WHERE idPerfil='$idPerfil'");
                //echo '1';
            }
           
        }
        else
        echo '0';
    
    }
    else{
    
        $consultaI=mysqli_query($con,"SELECT idIdioma from idioma where nombre='$idioma'");
        $idIdioma=mysqli_fetch_assoc($consultaI);
        $idI=$idIdioma['idIdioma'];
        $consultaC=mysqli_query($con,"SELECT idClasificacion from clasificacion where tipo='$clasificacion'");
        $idClas=mysqli_fetch_assoc($consultaC);
        $idC=$idClas['idClasificacion'];
        if($_POST['boton']=='insertar'){
            $insert=mysqli_query($con,"INSERT INTO `perfil`(`usuario`, `idCuenta`, `idIdioma`,`rutaAvatar`,`idClasificacion`) 
            VALUES ('$usuario','1','$idI','$rutaA','$idC')");
            if(mysqli_affected_rows($con))
                echo '1';
            else
                echo '0';
            
        }
        else{
            $update=mysqli_query($con,"UPDATE `perfil` SET `usuario`='$usuario',`idIdioma`='$idI',`rutaAvatar`='$rutaA',`idClasificacion`='$idC' WHERE idPerfil='$idPerfil'");
            echo '1';
        }

}

}
mysqli_close($con);

?>