<?php
session_start(); 
if( $_SESSION['u_valido'] == false)
    //header("location:pagina_prohibida.html");
    header('location: login.html')
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dreamhome Inicio</title>
</head>
<body>
    <h1>INGENIERO INMORTAL</h1>
</body>
</html>