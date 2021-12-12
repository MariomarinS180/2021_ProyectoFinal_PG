<!DOCTYPE html>
<!------ Include the above in your HEAD tag ---------->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="../../../imagenes/Logo_Dreamhome.png" type="image/x-icon">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" href="../../../estilos/estilo_login.css">
  <title>Iniciar Sesión</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="../../javascript/validacionAlertLogin.js"></script>
  <link rel="stylesheet" href="../../../estilos/estilo_registrer.css">

</head>

<body>
  <!--HEADER:-->
  <nav id="header" class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="../../../index.php">
        <img src="../../../imagenes/Logo_Dreamhome.png" class="rounded" alt="Logo 2021" width="50px" height="50px">
        Dreamhome</a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      </div>
    </div>
  </nav>
  <!--Fin del HEADER:-->




  <div id="logreg-forms">
    <form action="../controlador/validar_usuario.php" class="form-signin" method="POST">
      <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Inicia Sesión</h1>

      <span class="error" style="color: red;">
        <?php echo isset($_SESSION['error_nc']) ? $_SESSION['error_nc'] : "" ?>
      </span>

      <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Correo Electronico">

      <br>
      <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Contraseña">
      <br>
      <div id="alertaAgregar" data-bs-keyboard="false" tabindex="-1" role="alert" style="width: 100%; margin: auto; text-align:center"></div>




      <!--<form action="validar_usuario.php" method="post">               
            </form>
             -->


      <button class="btn btn-success btn-block" type="submit" onclick="validarLoginConAlert()"><i class="fas fa-sign-in-alt"></i> Iniciar Sesión</button>
      <a href="#" id="forgot_pswd">¿Se te olvidó la Contraseña?</a>
      <hr>
      <!-- <p>Don't have an account!</p>  -->
      <button class="btn btn-primary btn-block" type="button" id="btn-signup"><i class="fas fa-user-plus"></i> <a href="registrer.php">Sign up New Account</button></a>
    </form>

    <form action="/reset/password/" class="form-reset">
      <input type="email" id="resetEmail" class="form-control" placeholder="Email address" required="" autofocus="">
      <button class="btn btn-primary btn-block" type="submit">Reset Password</button>
      <a href="#" id="cancel_reset"><i class="fas fa-angle-left"></i> Back</a>
    </form>

    <form action="/signup/" class="form-signup">
      <div class="social-login">
        <button class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-f"></i> Sign
            up with Facebook</span> </button>
      </div>
      <div class="social-login">
        <button class="btn google-btn social-btn" type="button"><span><i class="fab fa-google-plus-g"></i> Sign
            up with Google+</span> </button>
      </div>

      <p style="text-align:center">O CON</p>

      <input type="text" id="user-name" class="form-control" placeholder="Full name" required="" autofocus="">
      <input type="email" id="user-email" class="form-control" placeholder="Email address" required autofocus="">
      <input type="password" id="user-pass" class="form-control" placeholder="Password" required autofocus="">
      <input type="password" id="user-repeatpass" class="form-control" placeholder="Repeat Password" required autofocus="">

      <button class="btn btn-primary btn-block" type="submit"><i class="fas fa-user-plus"></i> Sign Up</button>
      <a href="#" id="cancel_signup"><i class="fas fa-angle-left"></i> Back</a>
    </form>
    <br>
    </form>

  </div>

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

</html>