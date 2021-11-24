<?php
include('../conexionesBD/conexionBD_usuarios.php');

class UsuarioDAO{

    private $conexion;

    public function __construct(){
        $this->conexion = new ConexionBDUsuarios(); 
    }
    //AGREGAR USUARIOS
    public function agregarUsuario($nombre, $apellidos, $fecha_nac, $correo, $contra){
        $sql = "INSERT INTO usuarios VALUES ('$nombre', '$apellidos', '$fecha_nac', '$correo', '$contra')";
        $res = mysqli_query($this->conexion->getConexion(), $sql);
        return $res;
    }
}
?>