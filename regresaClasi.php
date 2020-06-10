<?php 
include("conexionDB.php");

$array2=Array();
$con=mysqli_connect($host_db,$user_db,$pass_db,$db_name);

$clasificacion=mysqli_query($con,"SELECT* FROM clasificacion");
while($clasificaciones=mysqli_fetch_assoc($clasificacion)){
    $array2[]=$clasificaciones['tipo'];
}

echo json_encode($array2, JSON_UNESCAPED_UNICODE); 
mysqli_close($con);


?>