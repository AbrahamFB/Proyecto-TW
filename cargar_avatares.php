<?php 
require_once 'conexion.php';

function getVideos(){
  $mysqli = getConn();
  $id = $_POST['id'];
  $query = "SELECT * FROM `perfil` WHERE idPerfil = $id";
  $result = $mysqli->query($query);
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    echo "<img src='../vistaAvatar.php?id=$id' alt='Img' width='25'/>";
  }
}

echo getVideos();
