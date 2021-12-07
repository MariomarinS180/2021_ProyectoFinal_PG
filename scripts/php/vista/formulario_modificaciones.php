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
        input {
            padding: 0;
            margin: 0;
        }

        th,
        td {

            padding: 0;
            margin: 0;
        }
    </style>
</head>

<body>
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

                                                "<td><input type='submit' value='Actualizar'></input></td>"
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

</body>

</html>