<?php
include('usuariosDAO.php'); 
$uDAO = new UsuarioDAO(); 

    $nombre = $_POST["nombre"]; 
    $p1 = $_POST["apellidos"]; 
    $fecha = $_POST["fecha"]; 
    $correo = $_POST["correo_usu"]; 
    $contra = $_POST["pass_usu"]; 
    $res = $uDAO->agregarUsuario($nombre,$p1,$fecha,sha1($correo),$contra); 

    if($res){
        //echo "YA CASI SOY INGENIERO INMORTAL !!!!";
        
        header('location: ../vista/login.html');
        //OPCION 1
        //<form
        //<input type=hidden value=exito |fallo 

        //OPCION 2
        //enviar un mensaje de EXITO a traves de SESIONES   
    }
    else{
        //echo "MEJOR ME DEDICO A LAS REDES ='(   ";
        header('location: ../vista/login.html');
        //enviar un mensaje de FALLO a traves de SESIONES
    }

?>
