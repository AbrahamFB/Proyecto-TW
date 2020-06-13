<?php
  include("conexionDB.php");
    $key=$_GET['key'];
    $array = array();
    
    $con=mysqli_connect($host_db, $user_db, $pass_db, $db_name);
    $query=mysqli_query($con, "select * from programas where titulo LIKE '%{$key}%'");

    while($row=mysqli_fetch_assoc($query))
    {
      $array[] = $row['titulo'];
    }
    echo json_encode($array);
    mysqli_close($con);
?>