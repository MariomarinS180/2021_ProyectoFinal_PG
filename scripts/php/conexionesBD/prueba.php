<?php

    include('conexionBD_Dreamhome.php');
    //include_once
    //require
    //require_once

    $con = new ConexionBDDreamhome();
    
    $conexion = $con->getConexion();

    //var_dump($conexion);

?>