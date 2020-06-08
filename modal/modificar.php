<?php
/*-----------------------
Autor: Obed Alvarado
http://www.obedalvarado.pw
Fecha: 27-02-2016
Version de PHP: 5.6.3
----------------------------*/
	# conectare la base de datos
    $con=@mysqli_connect('localhost', 'root', '', 'id13949485_fundb');
    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
	/*Inicia validacion del lado del servidor*/
	if (empty($_POST['idprograma'])) {
           $errors[] = "ID vacío";
        } else if (empty($_POST['titulo'])){
			$errors[] = "Código vacío";
		} else if (empty($_POST['temporada'])){
			$errors[] = "temporada vacío";
		} else if (empty($_POST['capitulo'])){
			$errors[] = "capitulo vacío";
		}else if (
			!empty($_POST['idprograma']) &&
			!empty($_POST['titulo']) && 
			!empty($_POST['temporada']) &&
			!empty($_POST['capitulo'])			
		){

		// escaping, additionally removing everything that could be (html/javascript-) code
		$titulo=mysqli_real_escape_string($con,(strip_tags($_POST["titulo"],ENT_QUOTES)));
		$temporada=mysqli_real_escape_string($con,(strip_tags($_POST["temporada"],ENT_QUOTES)));
		$capitulo=mysqli_real_escape_string($con,(strip_tags($_POST["capitulo"],ENT_QUOTES)));
		$idprograma=intval($_POST['idprograma']);
		$sql="UPDATE programas SET  titulo='".$titulo."', temporada='".$temporada."',
		capitulo='".$capitulo."' WHERE idprograma='".$idprograma."'";
		$query_update = mysqli_query($con,$sql);
			if ($query_update){
				$messages[] = "Los datos han sido actualizados satisfactoriamente.";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			}
		} else {
			$errors []= "Error desconocido.";
		}
		
		if (isset($errors)){
			
			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> 
					<?php
						foreach ($errors as $error) {
								echo $error;
							}
						?>
			</div>
			<?php
			}
			if (isset($messages)){
				
				?>
				<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>¡Bien hecho!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>
				<?php
			}

?>	