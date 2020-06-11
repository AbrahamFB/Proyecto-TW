<?php 
require_once 'conexion.php';

function getAvatares(){
  $mysqli = getConn();
  $id = $_POST['id'];
  $query = "SELECT * FROM `perfil` WHERE idPerfil = $id";
  $result = $mysqli->query($query);
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $a=$row['rutaAvatar'];
    echo "<img src='$a' alt='Img' width='25'/>";
  }
}

echo getAvatares();
