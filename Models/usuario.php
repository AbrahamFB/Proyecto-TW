<?php 
	class usuario
	{
		private $conexion;
		public function __construct()
		{
			require_once('conexion.php');
			$this->conexion= new conexion();
			$this->conexion->conectar();
		}

		function identificar($email,$password)
		{
			$pass=sha1($password);
			$sql="SELECT * FROM cuenta WHERE correo='$email' && pass_usuario='$pass'";
			$resulatdos = $this->conexion->conexion->query($sql);
			if ($resulatdos->num_rows > 0) {
				$r=$resulatdos->fetch_array();
			}
			else{
				$r[0]=0;
			}
			return $r;
			$this->conexion->cerrar();
		}
		
		function registrar($email, $tipo, $tdc,$password){
			$pass= sha1($password);
			$sql="INSERT INTO cuenta VALUES(0,'$email','$tipo','$tdc','$pass')";
			if($this->conexion->conexion->query($sql)){
				return true;
			}
			else
			{
				return false;
			}
			$this->conexion->cerrar();
		}
	
	}

	
	
?>