<?php
include('../conexionesBD/conexionBD_Dreamhome.php');

class DreamhomeDAO{
    private $conexion;

    public function __construct(){
        $this->conexion = new ConexionBDDreamhome(); 
    }
    //AGREGAR 
    public function agregarBranch($branchNo, $street, $city, $postcode){
        $sql = "INSERT INTO branch VALUES('$branchNo', '$street', '$city', '$postcode')";
        $res = mysqli_query($this->conexion->getConexion(), $sql);
        echo json_decode($res);
        return $res;
    }


    public function mostrar(){
        $sql = "SELECT * FROM branch";
        $res = mysqli_query($this->conexion->getConexion(), $sql);
        return $res;
    }

}
?>