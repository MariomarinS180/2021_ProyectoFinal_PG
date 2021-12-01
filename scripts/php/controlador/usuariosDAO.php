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
    public function ConsultaUsuarios($branchNo){
        $sql = "SELECT COUNT (correo) from usuarios where correo = '$branchNo'";
        $res = mysqli_query($this->conexion->getConexion(), $sql);
        return $res;
    }
}
?>