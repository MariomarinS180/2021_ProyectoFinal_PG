<?php
session_start(); 
if($_SESSION['u_valido'] == false ){
header('location: login.html');
} 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/d7cd3fe964.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../../estilos/estilo_registrer.css">
    <title>Registro de Usuario</title>
</head>

<body>
    <!--HEADER:-->
    <nav id="header" class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="../../../index.html">
                <img src="../../../imagenes/Logo_Dreamhome.png" class="rounded" alt="Logo 2021" width="60px" height="60px">
                Dreamhome</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <!--Fin del HEADER:-->


    <form>
        <hr>
        INGRESE EL NOMBRE <input type="text" name="nombre">
        <br><br>
        INGRESE EL Apellido Paterno <input type="text" name="ap1">
        <br><br>
        INGRESE EL Apellido Materno <input type="text" name="ap2">
        <br><br>
        INGRESE EL Su Fecha de Nacimiento <input type="date" name="fecha">
        <br><br>
        INGRESE su Correo Electrónico <input type="text" id="correo_usu" name="correo_usu">
        <br><br>
        INGRESE su Contraseña <input type="password" id="pass_usu" name="pass_usu">
        <br><br><br>
        <button class="btn btn-primary btn-block" type="submit"><i class="fas fa-user-plus"></i> REGISTRARSE</button>



    </form>


    <!--FOOTER:-->
  <footer id="footer" class="pb-4 pt-4">
    <div class="container">
      <div class="row text-center">
        <div class="col-12 col-md"><a href="#">Prensa</a></div>
        <div class="col-12 col-md"><a href="#">Preguntas Frecuentes</a></div>
        <div class="col-12 col-md"><a href="#">Contacto</a></div>
        <div class="col-12 col-md"><a href="#">¿Quiénes Somos?</a></div>
        <div class="col-12 col-md"><a href="#">Mapa del sitio</a></div>
      </div>
      
      <div class="row text-center">
        <div class="col pb-2 pt-4">
          <img src="../../../imagenes/Logo_Dreamhome.png" alt="Logo dream" width="80px" height="80px">
        </div>
      </div>

      <div class="row text-center">
        <div class="col pb-2 pt-4">
          <p>&copy; 2021 - Tecnológico Nacional de México, Campus Jerez - Reservados todos los derechos</p>
        </div>
      </div>
    </div>
  </footer>
  <!--Fin del Footer-->

</body>

</html>