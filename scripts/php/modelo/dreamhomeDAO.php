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

    public function agregarPropiedad($street, $city, $postcode, $type, $rooms, $rent){
        $sql = "INSERT INTO propertyforrent (street, city, postcode, typo, rooms, rent) 
        VALUES ('$street', '$city', '$postcode', '$type', $rooms, $rent)";
        $res = mysqli_query($this->conexion->getConexion(), $sql);
        //echo json_decode($res);
        return $res;
        
    }


    public function eliminarAlumno($propertyNo){
        $sql = "DELETE FROM propertyForRent WHERE propertyNo=$propertyNo";
        $res = mysqli_query($this->conexion->getConexion(), $sql);
        return $res;
    }
    public function modificarApartamento($propertyNo, $street, $city, $postcode, $type, $rooms, $rent){
        $sql = "UPDATE propertyForRent SET street= '$street', city='$city', postCode='$postcode', 
        typo='$type', rooms=$rooms, rent=$rent WHERE propertyNo = $propertyNo"; 
        $res = mysqli_query($this->conexion->getConexion(),$sql); 
        return $res; 
    }
    public function mostrarAlumnosPorNc($pn){
        $sql = "SELECT * FROM propertyForRent where propertyNo ='$pn'";
        $res = mysqli_query($this->conexion->getConexion(), $sql);
        return $res;
    }

    public function mostrar(){
        $sql = "SELECT * FROM propertyForRent";
        $res = mysqli_query($this->conexion->getConexion(), $sql);
        return $res;
    }
}
?>