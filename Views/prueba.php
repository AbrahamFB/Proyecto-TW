<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplicacion Web</title>

    <link rel="stylesheet" href="../Resources/css/bootstrap.min.css">

</head>
 
<body>
    <!--Barra de Navegacion-->
    <nav class="navbar navbar-default">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Cambiar Navegacion</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">AplicacionWeb</a>
        </div> 
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>DNI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="hidden" name="nombres[]" value="Yony Brondy">Yony Brondy</td>
                                <td><input type="hidden" name="apellidos[]" value="Mamani Fuentes">Mamani Fuentes</td>
                                <td><input type="hidden" name="dni[]" value="46766807">46766807</td>
                            </tr>
                            <tr>
                                <td><input type="hidden" name="nombres[]" value="Yeny Viviana">Yeny Viviana</td>
                                <td><input type="hidden" name="apellidos[]" value="Mamani Fuentes">Mamani Fuentes</td>
                                <td><input type="hidden" name="dni[]" value="44445454">44445454</td>
                            </tr>
                            <tr>
                                <td><input type="hidden" name="nombres[]" value="Yessica Maleydi">Yessica Maleydi</td>
                                <td><input type="hidden" name="apellidos[]" value="Mamani Fuentes">Mamani Fuentes</td>
                                <td><input type="hidden" name="dni[]" value="34344443">34344443</td>
                            </tr>
                        </tbody>
                    </table>
                    <input type="submit" class="btn btn-primary" value="Guardar">
                </form>
            </div>
        </div>
    </div>
    <script src="../Resources/js/jquery-1.11.2.js"></script>
    <script src="../Resources/js/bootstrap.min.js"></script>
    <script src="../Resources/js/libros2.js"></script>
</body>
</html>

    