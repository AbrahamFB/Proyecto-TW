<?php 
include("conexionDB.php");

$array2=Array();
$con=mysqli_connect($host_db,$user_db,$pass_db,$db_name);


if(isset($_POST)){
    $userName=(string)$_POST['nombreusuario'];
    $consulta=mysqli_query($con,'SELECT* FROM perfil where usuario="'.strtolower($userName).'"');
    if ($consulta->num_rows > 0) {
        echo '<div class="alert alert-danger"><strong>Oh no!</strong> Nombre de usuario no disponible.</div>';
    } else {
        echo '<div class="alert alert-success"><strong>Enhorabuena!</strong> Usuario disponible.</div>';
    }
}

?>