<?php
	
		require_once('../Models/clientes.php');


		$boton=$_POST['boton'];

		switch ($boton) {
			case 'registrar':
					
					$nombres = $_POST['nombres'];
					$apellidos = $_POST['apellidos'];
					$dni = $_POST['dni'];
					$totalRegistro = count($dni);
					$instancia = new clientes();
					for ($i=0; $i < $totalRegistro ; $i++) { 
						$instancia->registrar($nombres[$i],$apellidos[$i],$dni[$i]);
					}
					echo "Se registraron todos los datos";
				break;
			default:
				# code...
				break;
		}

		
?>