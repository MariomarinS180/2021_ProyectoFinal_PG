<?php
    class ConexionBDUsuarios{
        private $conexion;
        private $host = 'localhost';
        private $usuario = 'root'; //MySQL
        private $contraseña = '1234'; //MySQL
        private $bd = 'bd_usuarios';

        public function __construct(){
            //Java this.conexion =
            $this->conexion = mysqli_connect($this->host, $this->usuario, $this->contraseña, $this->bd);
            if(!$this->conexion)
                die("Error en conexion con MySQL" . mysqli_connect_error() . mysqli_connect_errno() );
        }
        public function getConexion(){
            return $this->conexion;
        }
    }
?>