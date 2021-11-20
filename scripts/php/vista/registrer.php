<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
</head>
<body>
    <form action="../controlador/procesar_altas_usuarios.php" method="post">
        <hr>
        INGRESE EL NOMBRE <input type="text" name="nombre"> 
        <br><br>
        INGRESE EL Apellido Paterno <input type="text" name="ap1">
        <br><br>
        INGRESE EL Apellido Materno <input type="text" name="ap2">
        <br><br>
        INGRESE EL Su Fecha de Nacimiento <input type="text" name="fecha">
        <br><br>
        INGRESE su Correo Electrónico <input type="text" id="correo_usu" name="correo_usu">
        <br><br>
        INGRESE su Contraseña <input type="password" id="pass_usu" name="pass_usu">
        <br><br><br>
        <button class="btn btn-primary btn-block" type="submit"><i class="fas fa-user-plus"></i> REGISTRARSE</button>
        


    </form>
    
</body>
</html>