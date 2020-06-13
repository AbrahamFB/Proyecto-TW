
<?php 
include("conexionDB.php");


$idPerfil=$_POST['idPerfil'];
$solicitud=$_POST['solicitud'];

    $array=Array();

    $con=mysqli_connect($host_db,$user_db,$pass_db,$db_name);
    
        $idiomas=mysqli_query($con,"SELECT * FROM perfil as p inner join clasificacion as c on p.idClasificacion=c.idClasificacion inner join idioma as i on i.idIdioma=p.idIdioma WHERE idPerfil='$idPerfil'");
        $idioma=mysqli_fetch_assoc($idiomas);
        $clas=$idioma['idClasificacion'];

        $array[]=$idioma['usuario'];
        $array[]=$idioma['tipo'];
        $array[]=$idioma['nombre'];
        $array[]=$idioma['rutaAvatar'];
        
        echo json_encode($array, JSON_UNESCAPED_UNICODE); 
    
    
    
    mysqli_close($con); 
    
?>