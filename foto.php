<? error_reporting(0);
include('config.php');
if (isset($_POST['enviado'])) {
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); }
// leemos datos de la avatar
$avatar= $_FILES["avatar"]["tmp_name"];
$nombreavatar  = $_FILES["avatar"]["name"];
//este es el archivo que añadiremosal campo blob
  $avatar  = $_FILES['avatar']['tmp_name'];
  //lo comvertimos en binario antes de guardarlo
		   $avatar=mysql_real_escape_string(file_get_contents($_FILES["avatar"]["tmp_name"]));
			 
			
$sql = "INSERT INTO `datos_cliente` (`id_cliente`, `nombre`, `apellidos`, `direccion`,
`correo`, `avatar`) VALUES(  '{$_POST['nombre']}' , '{$_POST['apellidos']}', '{$_POST['direccion']}', '{$_POST['correo']}' ,  '$avatar' ) ";
mysql_query($sql) or die(mysql_error());
header('Location: datos.php');
}
?>


<form enctype="multipart/form-data" action="alta.php" method="POST">

    <p><b>Marca:</b><br /><input type='text' name='marca' />
        <p><b>Modelo:</b><br /><input type='text' name='modelo' />
            <p><b>avatar:</b><br /><input name="avatar" type="file" />
                <p><input type='submit' value='Guardar' />
                    <input type='hidden' value='1' name='enviado' />
</form>