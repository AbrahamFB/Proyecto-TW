<?php 
    session_start();
    if (isset($_SESSION['ingreso']) && $_SESSION['ingreso']=='YES') 
    {
        header("location: principal.php");
    }
    else
    {

?>
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
            <a href="#" class="navbar-brand">F U N</a>
        </div>

        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
               
                <li><a href="javascript:void(0)" data-toggle="modal" data-target="#responsive">Registrarse</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Iniciar Sesion</div>
                    <div class="panel-body"> 
                        <div class="alert alert-danger text-center" style="display:none;" id="error">
                            <p>Usuario o Password no identificados</p>
                        </div>                     
                        <form role="form">
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                    <input type="email" class="form-control" id="email" placeholder="Example@gmail.com">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
                                    <input type="password" class="form-control" id="password" placeholder="Password">
                                </div>
                            </div>                     
                            <button type="button" class="btn btn-primary" onclick='confirmar();'><span class="glyphicon glyphicon-lock"></span> Entrar</button>   
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="responsive" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h2 class="modal-title">Datos de Usuario</h2>
              </div>
              <div class="modal-body">
                <div class="alert alert-success text-center" id="exito" style="display:none;">
                  <span class="glyphicon glyphicon-ok"> </span><span> Su cuenta ha sido registrada</span>
                </div>
                <form class="form-horizontal" id="formCliente">
                  <div class="form-group">
                    <label for="nombres" class="control-label col-xs-5">Nombres :</label>
                    <div class="col-xs-5">
                      <input id="nombres" name="nombres" type="text" class="form-control" placeholder="Ingrese sus Nombres">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="apellidos" class="control-label col-xs-5">Apellidos :</label>
                    <div class="col-xs-5">
                      <input id="apellidos" name="apellidos"  type="text" class="form-control" placeholder="Ingrese sus Apellidos">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email2" class="control-label col-xs-5">Email:</label>
                    <div class="col-xs-5">
                        <input id="email2" name="email2" type="email" class="form-control" placeholder="Ingrese su Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="pass" class="control-label col-xs-5">Contraseña:</label>
                    <div class="col-xs-5">
                        <input id="pass" name="pass" type="password" class="form-control" placeholder="Ingrese su Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="pass2" class="control-label col-xs-5">Repetir Contraseña:</label>
                    <div class="col-xs-5">
                        <input id="pass2" name="pass2" type="password" class="form-control" placeholder="Ingrese su Email">
                    </div>
                  </div>
                </form>
              </div>
              <div class="modal-footer">  
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                <button onclick="registrar();" type="button" class="btn btn-success">Guardar</button>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </div>
       
	<script src="../Resources/js/jquery-1.11.2.js"></script>
	<script src="../Resources/js/bootstrap.min.js"></script>
    <script>
        function confirmar(){
            var email = $('#email').val();
            var password = $('#password').val();
            $.ajax({
                url:'../Controllers/usuario.php',
                type:'POST',
                data:'email='+email+'&password='+password+"&boton=ingresar"
            }).done(function(resp){
                if(resp=='0'){
                    $('#error').show();
                }else{
                    location.href='../Views/principal.php';
                }
            });
        }
        function registrar(){
            var nombres=$('#nombres').val();
            var apellidos=$('#apellidos').val();
            var email=$('#email2').val();
            var password=$('#pass').val();
            var password2=$('#pass2').val();


            if (password===password2) {

                $.ajax({
                    url:'../Controllers/usuario.php',
                    type:'POST',
                    data:'nombres='+nombres+'&apellidos='+apellidos+'&email='+email+'&password='+password+'&boton=registrar'
                }).done(function(respuesta){
                    if (respuesta=='exito') {
                        $('#exito').show();
                    }
                    else{
                        alert(respuesta);
                    }
                    
                });
            }
            else{
                alert('Debe introducir la misma contraseña');
            }
            
        }


        
    </script>
</body>
</html>
<?php 

}?>