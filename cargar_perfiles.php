<?php 
require_once 'conexion.php';

function getPerfil(){
  $mysqli = getConn();
  $query = 'SELECT * FROM `perfil`';
  $result = $mysqli->query($query);
  $perfiles = '<option value="0">Elige tu Usuario</option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $perfiles .= "<option value='$row[idPerfil]'>$row[usuario]</option>";
  }
  return $perfiles;
}

echo getPerfil();