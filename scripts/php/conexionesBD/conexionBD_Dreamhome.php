<?php
class ConexionBDDreamhome{
    private $conexion;
    private $host = 'localhost';
    private $usuario = 'root'; //MySQL
    private $contraseña = '1234'; //MySQL
    private $bd = 'dreamhome';

    public function __construct(){
        $this->conexion = mysqli_connect($this->host, $this->usuario, $this->contraseña, $this->bd);
        if(!$this->conexion)
            die("Error en conexion con MySQL" . mysqli_connect_error() . mysqli_connect_errno() );
        else
            echo "";
    }
    public function getConexion(){
        return $this->conexion;
        if(!isset(self::$conexion)){
            self::$conexion = new self; 
        }
        return self::$conexion;
    }
}
?>