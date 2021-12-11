<?php
session_start();
if ($_SESSION['u_valido'] == false) {
    echo "<h1>Debe de Iniciar Sesión</h1>";
    header('location: login.html');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificaciones</title>
    <link rel="shortcut icon" href="../../../imagenes/Logo_Dreamhome.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <style>
        body{
            background-color: #d1e7dd;
        }
        input {
            padding: 0;
            margin: 0;
        }
        th,
        td {
            padding: 0;
            margin: 0;
        }

        .container-img {
            align-items: flex-end;
            text-align: center;
            vertical-align: bottom;
            width: 100%;
            background: #fff;
            padding: 10px;
            border-radius: 7px;
            line-height: 1.7;
            background-color: #d1e7dd;
        }


        button {
            box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.3);
            width: 110px;
            margin-left: 50%;
            transform: translateX(-590%);
        }
        
    </style>
</head>

<body>
    <nav id="header" class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand">
                <img src="../../../imagenes/Logo_Dreamhome.png" class="rounded" alt="Logo 2021" width="50px" height="50px">
                Dreamhome</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            </div>
        </div>
    </nav>
    <!--Fin del HEADER:-->
    <div class="container-modificar" style="text-align: center; background-color: #f5f5dc;">
        <h3>Por favor, modifique los cambios</h3>
    </div>
    <form action="../controlador/procesar_modificaciones.php" method="POST">
        <table id="tabla" class="table table-success table-striped">
            <thead>
                <tr>
                    <th>Calle</th>
                    <th>Ciudad</th>
                    <th>Código Postal</th>
                    <th>Vivienda</th>
                    <th>Cuartos</th>
                    <th>Renta</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    include('../modelo/dreamhomeDAO.php');
                    $id = $_GET["id"];
                    $aDAO = new DreamhomeDAO();
                    $res = $aDAO->mostrarAlumnosPorNc($id);

                    if (mysqli_num_rows($res) > 0) {
                        //echo "<table class= 'table table-striped table-bordered'>";
                        while ($fila = mysqli_fetch_assoc($res)) {
                            printf(
                                "<tr>
                                <td><input type='hidden' value='" . $fila["propertyNo"] . "' name='prop'></input>
                                <input type='text' value='" . $fila["street"] . "' name='street'></input></td>" .
                                    "<td><input type='text' value='" . $fila["city"] . "' name='c'></input></td>" .

                                    "<td><input type='text' value='" . $fila["postcode"] . "' name='pc'></input></td>" .

                                    "<td><input type='text' value='" . $fila["typo"] . "' name='ty'></input></td>" .

                                    "<td><input type='text' value='" . $fila["rooms"] . "' name='roms'></input></td>" .

                                    "<td><input type='text' value='" . $fila["rent"] . "' name='rn'></input></td>" .

                                    "<td><input type='submit' value='Actualizar' class='btn btn-success'></input></td>"
                            );
                        }
                    } else {
                        echo "SIN REGISTROS PARA MOSTRAR";
                    }
                    ?>
                </tr>
            </tbody>
        </table>
    </form>
    
    <div class="container-atras">
        <a href="../vista/header.php"><button class="btn btn-warning"> CANCELAR </button></a>
    </div>
    <br><br>
    <div class="container-img">
        <img src="../../../imagenes/modi2.png">
    </div>
    
    <footer id="footer" class="pb-4 pt-4" style="background-color: beige;">
        <div class="container">
            <div class="row text-center">
                <div class="col pb-2 pt-4">
                    <img src="../../../imagenes/Logo_Dreamhome.png" alt="Logo dream" width="80px" height="80px">
                </div>
            </div>

            <div class="row text-center">
                <div class="col pb-2 pt-4">
                    <p>&copy; 2021 - Bienes Raíces Dreamhome - Todos los Derechos Reservados</p>
                </div>
            </div>
        </div>
    </footer>
    <!--Fin del Footer-->

</body>

</html>