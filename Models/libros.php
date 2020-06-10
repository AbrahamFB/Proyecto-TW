<?php 
	class libros
	{
		private $conexion;
		public function __construct()
		{
			require_once('conexion.php');
			$this->conexion= new conexion();
			$this->conexion->conectar();
		}

		function lista_libros($valor,$inicio=FALSE,$limite=FALSE)
		{

			if ($inicio!==FALSE && $limite!==FALSE) {
				$sql="SELECT * FROM libros WHERE titulo_libro like '%".$valor."%' or autor_libro like '%".$valor."%' ORDER BY id_libro ASC LIMIT $inicio,$limite";
			}
			else{
				$sql="SELECT * FROM libros WHERE titulo_libro like '%".$valor."%' or autor_libro like '%".$valor."%' ORDER BY id_libro DESC";
			}
			$this->conexion->conexion->set_charset('utf8');
			$resultados=$this->conexion->conexion->query($sql);
			$arreglo = array();
			while ($re=$resultados->fetch_array(MYSQL_NUM)) {
				$arreglo[]=$re;
			}
			return $arreglo;
			$this->conexion->cerrar();
			

		}
		function actualizar($idlib,$isbn,$titulo,$autor,$añop,$nrop,$ediccion,$idioma)
		{
			$sql="UPDATE libros SET isbn_libro = '$isbn',titulo_libro='$titulo',autor_libro='$autor',publicacion_libro='$añop', paginas_libro='$nrop', ediccion_libro='$ediccion',idioma_libro='$idioma' WHERE id_libro='$idlib'";
			if($this->conexion->conexion->query($sql)){
				return true;
			}
			else{
				return false;
			}
			$this->conexion->cerrar();
		}
		function eliminar($id){
			$sql="DELETE FROM libros WHERE id_libro='$id'";
			if($this->conexion->conexion->query($sql)){
				return true;
			}
			else{
				return false;
			}
			$this->conexion->cerrar();
		}

		function guardar($isbn,$titulo,$autor,$añop,$nrop,$ediccion,$idioma,$imagen)
		{
			$sql= "INSERT INTO libros VALUES(0,'$isbn','$titulo','$autor','$añop','$nrop','$ediccion','$idioma','$imagen')";
			//$sql="UPDATE libros SET isbn_libro = '$isbn',titulo_libro='$titulo',autor_libro='$autor',publicacion_libro='$añop', paginas_libro='$nrop', ediccion_libro='$ediccion',idioma_libro='$idioma' WHERE id_libro='$idlib'";
			if($this->conexion->conexion->query($sql)){
				return true;
			}
			else{
				return false;
			}
			$this->conexion->cerrar();
		}

		function paginar($inicio= FALSE)
		{
			

			if ($inicio!==FALSE) {
				$sql = "SELECT * FROM libros LIMIT $inicio,1";
				$this->conexion->conexion->set_charset('utf8');
				$resultados=$this->conexion->conexion->query($sql);
				if ($resultados->num_rows > 0) {
					$r=$resultados->fetch_array();
				}
				else{
					return false;
				}			
				return $r;
			}
			else{
				$sql = "SELECT * FROM libros";
				$this->conexion->conexion->set_charset('utf8');
				$resultados=$this->conexion->conexion->query($sql);
				$arreglo = array();
				while ($re=$resultados->fetch_array(MYSQL_NUM)) {
					$arreglo[]=$re;
				}
				return $arreglo;
			}
			

			
			

		}
	}

	
	
?>