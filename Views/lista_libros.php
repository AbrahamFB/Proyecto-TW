
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplicacion Web</title>

    <link rel="stylesheet" href="../Resources/css/bootstrap.min.css">

</head>
 
<body onload="lista_libros('','1');">
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
         <div class="row form-horizontal">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_consultar" data-toggle="tab">Tab A</a></li>
              <li><a href="#tab_registrar" data-toggle="tab">Tab B</a></li>
              
            </ul>
        </div>
        </br>
        <div class="tab-content">
            <div class="tab-pane active" id="tab_consultar">
                <div class="row form-horizontal">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Libros Existentes</div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <div class="col-xs-4  text-right">
                                        <label for="buscar" class="control-label">Buscar:</label>
                                    </div>
                                    <div class="col-xs-4">
                                        <input  type="text" name="buscar" id="buscar" class="form-control" onkeyup="lista_libros(this.value,'1');" placeholder="Ingrese nombre o descripcion"/>
                                    </div>
                                    <div class="col-xs-4">
                                        <a href="" class="btn btn-success" data-toggle='modal' data-target='#modallibros' id="abrir-modal-libros">Registrar Libro</a>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div id="lista"></div> 
                                    <div id="paginador" class="text-center"></div> 
                                </div> 
                                
                                
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
                <div class="modal fade" id="modallibros" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h2 class="modal-title">Datos del Libro</h2>
                            </div>
                            <div class="modal-body">
                                <div class="alert alert-success text-center" id="exito" style="display:none;">
                                    <span class="glyphicon glyphicon-ok"> </span><span> Su cuenta ha sido registrada</span>
                                </div>
                                <form class="form-horizontal" id="formLibro">
                                    <div class="form-group">
                                        <label for="isbn" class="control-label col-xs-5">ISBN :</label>
                                        <div class="col-xs-5">
                                            <input  type="hidden" id="idlib" name="idlib"/>
                                            <input id="isbn" name="isbn" type="text" class="form-control" placeholder="Ingrese ISBN">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="titulo" class="control-label col-xs-5">Titulo :</label>
                                        <div class="col-xs-5">
                                            <input id="titulo" name="titulo" type="text" class="form-control" placeholder="Ingrese Titulo">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="autor" class="control-label col-xs-5">Autor :</label>
                                        <div class="col-xs-5">
                                            <input id="autor" name="autor"  type="text" class="form-control" placeholder="Ingrese Autor">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="añop" class="control-label col-xs-5">Año de Publicacion:</label>
                                        <div class="col-xs-5">
                                            <input id="añop" name="añop" type="text" class="form-control" placeholder="Ingrese Año de Publicacion">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="nrop" class="control-label col-xs-5">Nro. de Paginas:</label>
                                        <div class="col-xs-5">
                                            <input id="nrop" name="nrop" type="text" class="form-control" placeholder="Ingrese su Email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="ediccion" class="control-label col-xs-5">Ediccion:</label>
                                        <div class="col-xs-5">
                                            <input id="ediccion" name="ediccion" type="text" class="form-control" placeholder="Ingrese Ediccion">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="idioma" class="control-label col-xs-5">Idioma:</label>
                                        <div class="col-xs-5">
                                            <input id="idioma" name="idioma" type="text" class="form-control" placeholder="Ingrese Ediccion">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="imagen" class="control-label col-xs-5">Portada:</label>
                                        <div class="col-xs-5">
                                            <input id="imagen" name="imagen" type="file">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-5">
                                            <input name="boton" type="hidden" value="guardar">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">  
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-success" onclick="guardar();">Guardar</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
            </div>
            <div class="tab-pane" id="tab_registrar">
                <h4>Pane B</h4>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames
                    ac turpis egestas.</p>
            </div>
                
        </div><!-- tab content -->
    </div>
    <script src="../Resources/js/jquery-1.11.2.js"></script>
    <script src="../Resources/js/bootstrap.min.js"></script>
    <script src="../Resources/js/libros.js"></script>
</body>
</html>

    