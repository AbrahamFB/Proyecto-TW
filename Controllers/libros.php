<?php 
	require_once("../Models/libros.php");
	$boton= $_POST['boton'];
	if($boton==='buscar')
	{
		$inicio = 0;
        $limite = 3;
        if (isset($_POST['pagina'])) {
        	$pagina=$_POST['pagina'];
            $inicio = ($pagina - 1) * $limite;
        }
        $valor=$_POST['valor'];
		$ins=new libros();
		$a= $ins->lista_libros($valor);
		$b=count($a);
		$c= $ins->lista_libros($valor,$inicio,$limite);
		
		echo json_encode($c)."*".$b;
	}
	if($boton==='buscar2')
	{
		$pagina=0;
		$inicio = 0;
        if (isset($_POST['pagina'])) {
        	$pagina=$_POST['pagina'];
            $inicio = ($pagina - 1) * 1;
        }
		$ins=new libros();
		$a= $ins->paginar($inicio);
		$nro_rows = count($ins->paginar());
		$paginaAnt = $pagina-1;
		$paginaSig =$pagina+1; 
		$datos = array("paginaAnt" => $paginaAnt, "paginaSig" => $paginaSig,"registro" => $a, "nro_rows"=>$nro_rows);
		/*$b=count($a);
		$c= $ins->lista_libros($valor,$inicio,$limite);*/
		
		echo json_encode($datos);
	}
	if ($boton==='guardar') {
		$inst = new libros();
		$id=$_POST['idlib'];
		$isbn=$_POST['isbn'];
		$titulo=$_POST['titulo'];
		$autor=$_POST['autor'];
		$añop=$_POST['añop'];
		$nrop=$_POST['nrop'];
		$ediccion=$_POST['ediccion'];
		$idioma=$_POST['idioma'];
		
		if ($id!=="") {
			if($inst->actualizar($id,$isbn,$titulo,$autor,$añop,$nrop,$ediccion,$idioma)){
				echo 'exito';
			}
			else{
				echo "No se Actualizo los datos";
			}
		}
		else{
			$nombre_imagen = uniqid()."-".$_FILES["imagen"]["name"];
			$ruta = "../Resources/img/".$nombre_imagen;
			if ($_FILES['imagen']['type'] ==="image/jpg" || $_FILES['imagen']['type']==="image/jpeg") {
				if(move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta))
				{
					if($inst->guardar($isbn,$titulo,$autor,$añop,$nrop,$ediccion,$idioma,$nombre_imagen)){
						echo 'exito'."-".$_FILES["imagen"]["type"];
					}
					else{
						echo "No se Guardo los datos";
					}
				}
				else{
					echo "No se pudo subir el archivo";
				}
			}
			else{
				echo "La extension del archivo no es permitido";
			}
			
		}
		
	}
	if($boton==='eliminar')
	{
		$idlib=$_POST['idlib'];
		$inst = new libros();
		if($inst->eliminar($idlib)){
			echo 'Se elimino correctamente';
		}
		else{
			echo "No se eliminar los datos";
		}
	}
	
?>