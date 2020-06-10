<?php

    $host_db = "localhost";
    $user_db = "root";
//    $user_db = "id13949485_db";
//    $pass_db = "Proyectweb2020_";
    $pass_db = "";
    $db_name = "id13949485_fundb";
 
    $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

    if ($conexion->connect_error) {
        die("La conexion falló: " . $conexion->connect_error);
    }


 $conexion = mysqli_connect($host_db, $user_db, $pass_db, $db_name);

 $sqlBarraPro = "SELECT * FROM `programas` ORDER BY `idprograma`";

 $resultBarraPro = mysqli_query($conexion, $sqlBarraPro);

 $sqlBarraPe = "SELECT * FROM `pelicula` ORDER BY `idpelicula`";

 $resultBarraPe = mysqli_query($conexion, $sqlBarraPe);


 mysqli_close($conexion);
?>