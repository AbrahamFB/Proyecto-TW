<!DOCTYPE html>
<html>

<head>
    <title>Datos del Usuario</title>
</head>

<body>

    <br>

    <table border="1">
        <tr>
            <td>Nombre</td>
            <td>Apellidos</td>
            <td>Dirección</td>
            <td>Correo</td>
            <td>Foto</td>
        </tr>

        <?php
        $host_db = "localhost";
        $user_db = "id13949485_db";
        $pass_db = "Proyectweb2020_";
        $db_name = "id13949485_fundb";

        $conexion = mysqli_connect($host_db, $user_db, $pass_db, $db_name);

        $sql = "SELECT * FROM `datos_cliente` ORDER BY `id_cliente`";

        $result = mysqli_query($conexion, $sql);

        while ($mostrar = mysqli_fetch_array($result)) {
        ?>
            <tr>
                <td><?php echo $mostrar['nombre'] ?></td>
                <td><?php echo $mostrar['apellidos'] ?></td>
                <td><?php echo $mostrar['direccion'] ?></td>
                <td><?php echo $mostrar['correo'] ?></td>
                <td><?php echo $mostrar['avatar'] ?></td>
            </tr>
        <?php
        }
        ?>
    </table>

</body>

</html>