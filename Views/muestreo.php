
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
            <div class="col-md-6 col-md-offset-3">
                <div class="form-group">
                    <input id="isbn" name="isbn" type="text" class="form-control" placeholder="Ingrese ISBN">
                </div>
                <div class="form-group">
                    <input id="titulo" name="titulo" type="text" class="form-control" placeholder="Ingrese Titulo">
                </div>
                <div class="form-group">
                    <input id="autor" name="autor"  type="text" class="form-control" placeholder="Ingrese Autor">
                </div>
                <div class="form-group">
                    <input id="añop" name="añop" type="text" class="form-control" placeholder="Ingrese Año de Publicacion">

                </div>
                <div class="form-group">
                    <input id="nrop" name="nrop" type="text" class="form-control" placeholder="Ingrese su Email">
                </div>
                <div class="form-group">
                    <input id="ediccion" name="ediccion" type="text" class="form-control" placeholder="Ingrese Ediccion">
                    
                </div>
                <div class="form-group">
                    <input id="idioma" name="idioma" type="text" class="form-control" placeholder="Ingrese Ediccion">
                    
                </div>
                <div class="form-group text-center">
                    <button class="btn btn-default" id="anterior">Back</button>
                    <button class="btn btn-default" id="siguiente">Next</button>
                </div>
            </div>
        </div> 
    </div>
    <script src="../Resources/js/jquery-1.11.2.js"></script>
    <script src="../Resources/js/bootstrap.min.js"></script>
    <script src="../Resources/js/muestreo.js"></script>
</body>
</html>

    