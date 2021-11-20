<?php

include('usuariosDAO.php'); 
$uDAO = new UsuarioDAO(); 

$res = $uDAO->agregarUsuario('Mario', 'Marin', 'Ramirez', '04/09/2015', 'prueba@gmail.com', '12345'); 

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