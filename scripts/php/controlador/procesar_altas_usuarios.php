<?php

include('usuariosDAO.php'); 
$uDAO = new UsuarioDAO(); 

    $nombre = $_POST["nombre"]; 
    $p1 = $_POST["ap1"]; 
    $p2 = $_POST["ap2"]; 
    $fecha = $_POST["fecha"]; 
    $correo = $_POST["correo_usu"]; 
    $contra = $_POST["pass_usu"]; 
    $res = $uDAO->agregarUsuario($nombre, $p1, $p2, $fecha, sha1($correo), sha1($contra)); 






    if($res){
        //echo "YA CASI SOY INGENIERO INMORTAL !!!!";
        
        header('location:../vista/registrer.php');
        //OPCION 1
        //<form
        //<input type=hidden value=exito |fallo 

        //OPCION 2
        //enviar un mensaje de EXITO a traves de SESIONES
           
    }
    else{
        //echo "MEJOR ME DEDICO A LAS REDES ='(   ";
        header('location:../vista/registrer.php');
        //enviar un mensaje de FALLO a traves de SESIONES
    }

?>
