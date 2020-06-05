    <header>

        <nav>
            <div id="menuSup">

                <ul class="menu">
                    <li class="top"><a href="/">
                            <img class="logo" src="logo/c39bb3c9-47ff-411c-9608-980a819f2463_1024.jpg" alt="Logotipo">
                        </a></li>
                    <li class="top"><a class="top_link" href="#"><span>Inicio</span></a></li>

                    <li class="top"><a class="top_link" href="#"><span class="bajo">Categorías</span></a>
                        <ul class="sub">
                        <li><a class="sobre" href="#">Programas</a>
                                <ul>
                            <?php
                                include("conexionDB.php");
                                while ($mostrar = mysqli_fetch_array($resultBarraPro)){
                                ?>
                                        <li><?php echo "<a href='#'>".$mostrar['titulo']."</a>"?></li>
                                    
                            <?php    
                            }
                                ?></ul>
                                </li>
                                <li><a class="sobre" href="#">Peliculas</a>
                                <ul>
                            <?php
                                include("conexionDB.php");
                                while ($mostrar1 = mysqli_fetch_array($resultBarraPe)){
                                ?>
                                        <li><?php echo "<a href='#'>".$mostrar1['titulo']."</a>"?></li>
                                    
                            <?php    
                            }
                                ?></ul>
                                </li>

                        </ul>
                    </li>

                    <li class="top"><a class="top_link" href="#"><span>Crear Usuario</span></a></li>
                    <li class="avatar">
                        <a href="#"><img class="avatarIMG" src="avatar/usuario.svg" alt=""></a>
                    <li>

                    <li class="avatar"><a href="#"><img class="avatarIMG"
                                src="https://cdn1.iconfinder.com/data/icons/avatar-1-2/512/Add_User1-512.png"
                                alt=""></a>
                    </li>

                    <!-- Buscador -->
                    <form action="/search" id="busq" method="GET" name="busqueda" style="display:inline;">
                        <input type="text" name="busquedaEncabezado" class="typeahead tt-query buscar" autocomplete="off" spellcheck="false" placeholder="Buscar"></form>
                    </li>


                </ul>
            </div>
        </nav>
    </header>
    <section>
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
                <?php echo "<img src='vista.php?id=$i' alt='Img blob desde MySQL' width='600'/>"; ?>
				<section class="caption">
                <?php echo "<h1 class='tituloSli'>".$mostrar['titulo']."</h1>" ?>
                <?php echo "<p class='subSli'>Temporada: ".$mostrar['temporada']."</p>" ?>
                <?php echo "<p class='subSli'>Capitulo: ".$mostrar['capitulo']."</p>" ?>
				</section>
            </li>
            <?php
                
            }
            ?>

		</ul>


	</div>
    </section>
    
</body>
