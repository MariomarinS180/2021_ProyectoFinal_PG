<?php
include('../scripts/php/conexionesBD/conexionBD_Dreamhome.php');
$con = new ConexionBDDreamhome(); 
$conexion = $con->getConexion();

if($_SERVER['REQUEST_METHOD']=='POST'){
    $cadenaJSON = file_get_contents('php://input'); 
    if($cadenaJSON==false){
        echo "No hay cadena JSON";
    }else{
        $datos = json_decode($cadenaJSON, true); 
        $property = $datos['propertyNo'];
        $street = $datos['street'];  
        $city = $datos['city'];
        $postcode = $datos['postcode'];
        $typo = $datos['typo'];
        $rooms = $datos['rooms'];
        $street = $datos['rent'];  
        
        $sql = "INSERT INTO propertyforrent (street, city, postcode, typo, rooms, rent) 
        VALUES ('$street', '$city', '$postcode', '$type', $rooms, $rent)";

        $res = mysqli_query($conexion, $sql); 
        $respuesta = array();

        if($res){
            $respuesta['EXITO'] = true; 
            $respuesta['Mensaje'] = 'Insercción Correcta'; 
            $resJSON = json_encode($respuesta);
        }else{
            $respuesta['EXITO'] = false; 
            $respuesta['Mensaje'] = 'Error en la Insercción'; 
            $resJSON = json_encode($respuesta);
        }
    }
}//FIN PRIMER IF
?>