<?
// conectar al servidor mysql
$host_db = "localhost";
$user_db = "id13949485_db";
$pass_db = "Proyectweb2020_";
$db_name = "id13949485_fundb";

$link = mysql_connect($host_db, $user_db, $pass_db, $db_name);
if (!$link) {
    die('Error de conexion a mysql : ' . mysql_error());
}
//conectar a la base de datos
if (! mysql_select_db('concesionario') ) {
    die ('error de conexión base de datos : ' . mysql_error());
}
?>