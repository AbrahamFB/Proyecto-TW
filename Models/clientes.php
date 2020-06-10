<?php 
	class clientes
	{
		private $conexion;
		public function __construct()
		{
			require_once('conexion.php');
			$this->conexion= new conexion();
			$this->conexion->conectar();
		}
		
		function registrar($nombres,$apellidos,$dni){
		
			$sql="INSERT INTO clientes VALUES(0,'$nombres','$apellidos','$dni')";
			if($this->conexion->conexion->query($sql)){
				return true;
			}
			else
			{
				return false;
			}
		}
	
	}

	
	
?>