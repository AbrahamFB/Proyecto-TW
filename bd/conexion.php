<?php 
class Conexion{	  
    public static function Conectar() {   
//    $user_db = "id13949485_db";
//    $pass_db = "Proyectweb2020_";     
        define('servidor', 'localhost');
        define('nombre_bd', 'id13949485_fundb');
        //define('usuario', 'id13949485_db');
        define('usuario', 'root');
        define('password', '');	
        //define('password', 'Proyectweb2020_');					        
        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');			
        try{
            $conexion = new PDO("mysql:host=".servidor."; dbname=".nombre_bd, usuario, password, $opciones);			
            return $conexion;
        }catch (Exception $e){
            die("El error de Conexión es: ". $e->getMessage());
        }
    }
}