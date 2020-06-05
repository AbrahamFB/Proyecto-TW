<?php
  include("conexionDB.php");
    $key=$_GET['key'];
    $array = array();
    
    $con=mysqli_connect($host_db, $user_db, $pass_db, $db_name);
    $query=mysqli_query($con, "select * from programas where titulo LIKE '%{$key}%'");
    //    $query=mysqli_query($con, "SELECT ta.idpelicula as Id,ta.titulo, tb.titulo FROM pelicula ta INNER JOIN programas tb ON ta.idpelicula = tb.idprograma WHERE ta.titulo LIKE '%{$key}%' OR tb.titulo LIKE '%{$key}%'");

    while($row=mysqli_fetch_assoc($query))
    {
      $array[] = $row['titulo'];
    }
    echo json_encode($array);
    mysqli_close($con);
?>
