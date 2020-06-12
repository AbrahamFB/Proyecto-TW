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
                            <li><a class="sobre" href="#programas">Programas</a>
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
                            <li><a class="sobre" href="#peliculas">Peliculas</a>
                                <ul>
                                    <?php
                                include("conexionDB.php");
                                while ($mostrar1 = mysqli_fetch_array($resultBarraPe)){
                                ?>
                                    <li><?php echo "<a href=''>".$mostrar1['titulo']."</a>"?></li>

                                    <?php    
                            }
                                ?></ul>
                            </li>

                        </ul>
                    </li>

                    <li class="avatar">
                        <a href="#"><img class="avatarIMG" src="avatar/usuario.svg" alt=""></a>
                    <li>

                    <li class="avatar">Bob Esponja<a href="#" id="activarCrear"><img class="avatarIMG"
                                src="https://cdn1.iconfinder.com/data/icons/avatar-1-2/512/Add_User1-512.png"
                                alt=""></a>
                    </li>

                    <!-- Buscador -->
                    <form action="/search" id="busq" method="GET" name="busqueda" style="display:inline;">
                        <input type="text" name="busquedaEncabezado" class="typeahead tt-query buscar"
                            autocomplete="off" spellcheck="false" placeholder="Buscar"></form>
                    </li>


                </ul>
            </div>
        </nav>
    </header>
    <section>
        <?php include_once 'sliderPrincipal.php';?>
    </section>
    <?php include_once 'tablaProgramas.php'?>
    </section>
    <section>
        <?php include_once 'tablaPeliculas.php'?>
    </section>
    <section>
        <?php include_once 'registro.php'?>
    </section>


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="style/font-awesome.css">
    <link rel="stylesheet" href="style/estilos.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="js/typeahead.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/ventanaFlotante.js"></script>
    <script>
$(document).ready(function() {
    $('input.typeahead').typeahead({
        name: 'busquedaEncabezado',
        remote: 'busca.php?key=%QUERY',
        limit: 10
    });
});
    </script>

    </body>