<?php

    //echo "<h3>login</h3>"
    include('../conexionesBD/conexionBD_usuarios.php');
    $con = new ConexionBDUsuarios(); 
    $conexion = $con->getConexion(); 
    //var_dump($conexion); 
    //inputEmail
    //inputPassword
   
    //echo $_POST['inputPassword'];
    

    

    if($conexion){
        if(isset($_POST['inputEmail']) && isset($_POST['inputPassword']) 
            && !empty($_POST['inputEmail']) && !empty($_POST['inputPassword'])){
            
            $u=$_POST['inputEmail'];
            $p=$_POST['inputPassword'];
            //$u_cifrado = sha1($u); 
            $p_cifrado = sha1($p);
            
                $sql = "SELECT * FROM usuarios where correo ='$u' AND contra ='$p_cifrado'"; 

                $res = mysqli_query($conexion, $sql);

                if(mysqli_num_rows($res)==1){
                    session_start(); 
                    $_SESSION['usuario'] = $u; 
                    $_SESSION['u_valido'] = true; 
                    header('location:../vista/header.php');
                }else{
                    header('location: ../vista/login.php');
                    //echo "MEJOR ME DEDICO A LAS REDES "; 
                }
                //echo "entrando al if";      
        }else{
            include("../vista/login.php");
            //echo "<p> INTRODUZCA LOS CAMPOS </p>";
        }
    }else{
        echo "SIN CONEXION"; 
    }
