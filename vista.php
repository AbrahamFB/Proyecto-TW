<?php
if(!empty($_GET['id'])){
    include("conexionDB.php");
    
    //Crear conexion mysql
    $db = new mysqli($host_db, $user_db, $pass_db, $db_name);
    
    //revisar conexion
    if($db->connect_error){
       die("Connection failed: " . $db->connect_error);
    }
    
    //Extraer imagen de la BD mediante GET
    $result = $db->query("SELECT portada FROM programas WHERE idprograma = {$_GET['id']}");
    
    if($result->num_rows > 0){
        $imgDatos = $result->fetch_assoc();
        
        //Mostrar Imagen
        header("Content-type: image/jpg"); 
        echo $imgDatos['portada']; 
    }else{
        echo 'Imagen no existe...';
    }
}
?>