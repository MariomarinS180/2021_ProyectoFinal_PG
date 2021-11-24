<?php
include('../conexionesBD/conexionBD_Dreamhome.php');

class Dreamhome{
    private $conexion;

    public function __construct(){
        $this->conexion = new ConexionBDUsuarios(); 
    }
    //AGREGAR USUARIOS
    public function agregarBranch($bNo, $st, $city, $pc){
        $sql = "INSERT INTO branch VALUES ('$bNo', '$st', '$city', '$pc')";
        $res = mysqli_query($this->conexion->getConexion(), $sql);
        return $res;
    }

}

?>