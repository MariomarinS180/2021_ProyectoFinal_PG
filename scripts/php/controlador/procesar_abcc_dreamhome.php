<?php
include('../modelo/dreamhomeDAO.php');

$dao = new DreamhomeDAO(); 

    $street = $_POST["txtStreet"];
    $city = $_POST["txtCity"];
    $postcode= $_POST["txtpostCode"];
    $type = $_POST['typo'];
    $rooms = $_POST['txtCuarto'];
    $rent = $_POST['txtRenta'];
    
    $res = $dao->agregarPropiedad($street,$city, $postcode, $type, $rooms, $rent); 
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
