<?php 
include("conexionDB.php");
$array=Array();

$con=mysqli_connect($host_db,$user_db,$pass_db,$db_name);
$idiomas=mysqli_query($con,"SELECT* FROM IDIOMA");
while($idioma=mysqli_fetch_assoc($idiomas)){
    $array[]=$idioma['nombre'];
}

echo json_encode($array, JSON_UNESCAPED_UNICODE); 

mysqli_close($con);


?>
