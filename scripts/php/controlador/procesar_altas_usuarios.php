<?php
include('usuariosDAO.php');
include('../conexionesBD/conexionBD_usuarios.php'); 

$res = new ConexionBDUsuarios();
//$laConexion = $miConexion->getConexion(); 


$uDAO = new UsuarioDAO();
$nombre = $_POST["nombre"];
$p1 = $_POST["apellidos"];
$fecha = $_POST["fecha"];
$correo = $_POST["correo_usu"];
$contra = $_POST["pass_usu"];

//$consulta = "SELECT COUNT(correo) FROM usuarios WHERE correo='$correo'";
//$resConexion = mysqli_query($laConexion, $consulta);

     $res = $uDAO->agregarUsuario($nombre, $p1, $fecha, $correo, sha1($contra));
     if ($res = true) {
        //echo "YA CASI SOY INGENIERO INMORTAL !!!!";
        header('location: ../vista/login.html');
        //OPCION 1
        //<form
        //<input type=hidden value=exito |fallo 
        //OPCION 2
        //enviar un mensaje de EXITO a traves de SESIONES   
    } else {
        //echo "MEJOR ME DEDICO A LAS REDES ='(   ";
       
        //enviar un mensaje de FALLO a traves de SESIONES
    }


//mysqli_free_result($resConexion);
//mysqli_close($laConexion);
?>
