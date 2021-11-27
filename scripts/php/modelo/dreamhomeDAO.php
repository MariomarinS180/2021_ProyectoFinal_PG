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
    public function eliminarAlumno($branch){
        $sql = "DELETE FROM branch WHERE branchNo='$branch'";
        $res = mysqli_query($this->conexion->getConexion(), $sql);
        return $res;
    }
    public function modificarBranch($branchNo, $street, $city, $postcode){
        $sql = "UPDATE branch SET street= '$street', city='$city', postCode='$postcode' 
        WHERE branchNo = '$branchNo'"; 
        $res = mysqli_query($this->conexion->getConexion(),$sql); 
        return $res; 
    }
    public function mostrarAlumnosPorNc($nc){
        $sql = "SELECT * FROM branch where branchNo ='$nc'";
        $res = mysqli_query($this->conexion->getConexion(), $sql);
        return $res;
    }


    public function mostrar(){
        $sql = "SELECT * FROM branch";
        $res = mysqli_query($this->conexion->getConexion(), $sql);
        return $res;
    }

}
?>