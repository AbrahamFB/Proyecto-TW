        <div class="slideshow">
            <ul class="slider">

            <?php
                include("conexionDB.php");

                $conexion = mysqli_connect($host_db, $user_db, $pass_db, $db_name);

                $sql = "SELECT * FROM `programas` ORDER BY `idprograma`";

                $result = mysqli_query($conexion, $sql);

                $i=0;
                while ($mostrar = mysqli_fetch_array($result)) {
                        $i++;
                        ?>
                <li>
                    <?php echo "<img src='../vista.php?id=$i' alt='Img' width='600'/>"; ?>
                    <section class="caption">
                    <?php echo "<h1 class='tituloSli' style='color: white; text-shadow: black 0.1em 0.1em 0.2em'>".$mostrar['titulo']."</h1>" ?>
                    <?php echo "<p class='subSli'style='color: white; text-shadow: black 0.1em 0.1em 0.2em'>Temporada: ".$mostrar['temporada']."</p>" ?>
                    <?php echo "<p class='subSli'style='color: white; text-shadow: black 0.1em 0.1em 0.2em'>Capitulo: ".$mostrar['capitulo']."</p>" ?>
                    </section>
                </li>
                <?php
                    
                }
                ?>

            </ul>
        </div>
        