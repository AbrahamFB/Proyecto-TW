<?php
include_once 'bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

// Recepción de los datos enviados mediante POST desde el JS   

$titulo = (isset($_POST['titulo'])) ? $_POST['titulo'] : '';
$temporada = (isset($_POST['temporada'])) ? $_POST['temporada'] : '';
$capitulo = (isset($_POST['capitulo'])) ? $_POST['capitulo'] : '';
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$idprograma = (isset($_POST['idprograma'])) ? $_POST['idprograma'] : '';

switch($opcion){
    case 1: //alta
        $consulta = "INSERT INTO programas (titulo, temporada, capitulo) VALUES('$titulo', '$temporada', '$capitulo') ";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 

        $consulta = "SELECT idprograma, titulo, temporada, capitulo FROM programas ORDER BY idprograma DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 2: //modificación
        $consulta = "UPDATE programas SET titulo='$titulo', temporada='$temporada', capitulo='$capitulo' WHERE idprograma='$idprograma' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "SELECT idprograma, titulo, temporada, capitulo FROM programas WHERE idprograma='$idprograma' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;        
    case 3://baja
        $consulta = "DELETE FROM programas WHERE idprograma='$idprograma' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;        
}

print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a JS
$conexion = NULL;
