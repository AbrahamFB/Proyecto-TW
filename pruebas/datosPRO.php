<!DOCTYPE html>
<html>

<head>
    <title>Datos del Usuario</title>
</head>

<body>

    <br>

    <table border="1">
        <tr>
            <td>Título</td>
            <td>Capitulo</td>
            <td>Temporada</td>
            <td>Portada</td>
        </tr>

        <?php
        include("conexionDB.php");

        $conexion = mysqli_connect($host_db, $user_db, $pass_db, $db_name);

        $sql = "SELECT * FROM `programas` ORDER BY `idprograma`";

        $result = mysqli_query($conexion, $sql);
        

       $i=0;
        while ($mostrar = mysqli_fetch_array($result)) {
            $i++;
        ?>
            <tr>
                <td><?php echo $mostrar['titulo'] ?></td>
                <td><?php echo $mostrar['capitulo'] ?></td>
                <td><?php echo $mostrar['temporada'] ?></td>
                <td><?php echo "<img src='vista.php?id=$i' alt='Img blob desde MySQL' width='600'/>";?></td>
            </tr>
        <?php
        }
        ?>
    </table>

</body>

</html>