<?php
include('../modelo/dreamhomeDAO.php');

$dao = new DreamhomeDAO(); 

    $branch = $_POST["txtBranch"];
    $st = $_POST["txtStreet"];
    $cy = $_POST["txtCity"];
    $pc= $_POST["txtpostCode"];
    
    $res = $dao->agregarBranch($branch,$st,$cy,$pc);
    if($res){
        //echo "YA CASI SOY INGENIERO INMORTAL !!!!";
        header('location: ../vista/header.php');
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
