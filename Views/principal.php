
<?php
session_start();
if (isset($_SESSION['ingreso']) && $_SESSION['ingreso'] == 'YES') {?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>F U N</title>
    <link rel="shortcut icon" href="../logo/c39bb3c9-47ff-411c-9608-980a819f2463_1024.ico" type="image/x-icon">

    <link rel="stylesheet" href="../Resources/css/bootstrap.min.css">


</head>

<body >
    <style>
        body{
            width:100;
        }
    </style>
    <!--Barra de Navegacion-->
    <nav>
            <div id="menuSup">

                <ul class="menu">
                    <li class="top"><a href="/">
                            <img class="logo" src="../logo/c39bb3c9-47ff-411c-9608-980a819f2463_1024.jpg" alt="Logotipo">
                        </a></li>
                    <li class="top"><a class="top_link" href="#"><span>Inicio</span></a></li>

                    <li class="top"><a class="top_link" href="#"><span class="bajo">Categorías</span></a>
                        <ul class="sub">
                        <li><a class="sobre" href="#programas">Programas</a>
                                <ul>
                            <?php
include "../conexionDB.php";
    while ($mostrar = mysqli_fetch_array($resultBarraPro)) {
        ?>
                                        <li><?php echo "<a href='#'>" . $mostrar['titulo'] . "</a>" ?></li>

                            <?php
}
    ?></ul>
                                </li>
                                <li><a class="sobre" href="#peliculas">Peliculas</a>
                                <ul>
                            <?php
include "../conexionDB.php";
    while ($mostrar1 = mysqli_fetch_array($resultBarraPe)) {
        ?>
                                        <li><?php echo "<a href=''>" . $mostrar1['titulo'] . "</a>" ?></li>

                            <?php
}
    ?></ul>
                                </li>

                        </ul>
                    </li>

                    <li class="avatar">
                        <a href="#"><img class="avatarIMG" src="../avatar/usuario.svg" alt=""></a>
                    <li>
                    <!--Donde esta Bob sea para ver los datos del perfil al precionarlo-->
                    <li class="avatar"><a href="#" style="color:white">Bob Esponja</a><a href="#" id="activarCrear"><img class="avatarIMG"
                                src="https://cdn1.iconfinder.com/data/icons/avatar-1-2/512/Add_User1-512.png"
                                alt="" style="margin-left: 20px"></a>
                    </li>

                    <!-- Buscador -->
                    <form action="/search" id="busq" method="GET" name="busqueda" style="display:inline; color:black;  font-size: 15px; border-radius: 5px;">
                        <input type="text" name="busquedaEncabezado" class="typeahead tt-query buscar" autocomplete="off" spellcheck="false" placeholder="Buscar"></form>
                    </li>


                </ul>
            </div>
        </nav>
    <nav class="navbar navbar-default">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="javascript: void(0)" class="dropdown-toggle" data-toggle="dropdown"><?php echo "Bienvenido " . $_SESSION['nombre']; ?></a>
                     <ul class="dropdown-menu">
                        <li><a href="javascript: void(0)" onclick='cerrar();'>Cerrar Session</a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="colw-md-4">
                <div class="panel panel-default">
                    <div class="panel-body">


    </header>
    <section>
        <?php include_once '../sliderPrincipal.php'?>
    </section>
        <?php include_once '../tablaProgramas.php'?>
    </section>
    <section>
        <?php include_once '../tablaPeliculas.php'?>
    </section>
    <section>
        <?php include_once '../registro.php'?>
    </section>

    <section>
    <div class="oscurecer" id="oscurecer"></div>
	<div class="registrar" id="registrar">
    <div class="oscurecer2" id="oscurecer2">
        <h3>Elige tu avatar:</h3>
        <div class="avatares">
            <div class="iavatar"alt="avatar"><img class="avatars" src="../3011264-avatars-with-medical-masks/png/001-man.png"></div>
            <div class="iavatar"alt="avatar1"><img class="avatars" src="../3011264-avatars-with-medical-masks/png/002-woman.png"></div>
            <div class="iavatar"alt="avatar2"><img class="avatars" src="../3011264-avatars-with-medical-masks/png/003-delivery man.png"></div>
            <div class="iavatar"alt="avatar3"><img class="avatars" src="../3011264-avatars-with-medical-masks/png/009-girl.png"></div>
            <div class="iavatar"alt="avatar4"><img class="avatars" src="../3011264-avatars-with-medical-masks/png/016-punk.png"></div>
            <div class="iavatar"alt="avatar5"><img class="avatars" src="../3011264-avatars-with-medical-masks/png/017-woman.png"></div>
        </div>
        <input type="button" value="¡Vamos!" class="btn btn-success" id="elegirA">
    </div>
		<h1>Crear nuevo perfil</h1>

        <form action="" id="new">

        <div class="alert alert-success" id="alert" style="display: none;">&nbsp;</div>
        <div class="alert alert-danger" id="alertd" style="display: none;">&nbsp;</div>
        
            <div id="ava">
                <a href="#" id="avatarOpcion"><img class="avatarOpcion"   src="../3011264-avatars-with-medical-masks/png/001-man.png" alt="kk"></a>

            </div>

            <label for="usuario">Nombre:</label>
            <input type="text" placeholder="Nombre de usuario" id="usuario" name="nombreusuario" class="form-control">
            <div id="resultadouser"  style="display: none;"></div>
            <label style="color:black;"for="sel1">Idioma:</label>
            <select class="form-control" id="sel1"></select>
            <label for="sel2">Clasificación:</label>
			<select class="form-control" id="sel2"></select>
            <input type="button" value="Crear" class="btn btn-success" id="crear">

		</form>
	</div>

    </section>



                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../Resources/js/jquery-1.11.2.js"></script>
    <script src="../Resources/js/bootstrap.min.js"></script>
    <script>
        function cerrar()
        {
            $.ajax({
                url:'../Controllers/usuario.php',
                type:'POST',
                data:"mensaje=mensaje&boton=cerrar"
            }).done(function(resp){
                //alert(resp);
                window.location.href = "../index.php";
            });
        }
    </script>
        <script>
        $(document).ready(function(){
        $('input.typeahead').typeahead({
            name: 'busquedaEncabezado',
            remote:'../busca.php?key=%QUERY',
            limit : 10
        });
    });
    </script>
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="../style/font-awesome.css">
    <link rel="stylesheet" href="../style/estilo.css">

    <!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script-->
    <script src="../js/typeahead.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/ventanaFlotante.js"></script>


    <link rel="stylesheet" href="../style/estilo.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="../Resources/css/bootstrap.min.css">

    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css">
    <!--datables estilo bootstrap 4 CSS-->
    <link rel="stylesheet"  type="text/css" href="datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
</body>
</html>

<?php

} else {
    header("location: ./");
}
include '../pie.inc.php'
?>
