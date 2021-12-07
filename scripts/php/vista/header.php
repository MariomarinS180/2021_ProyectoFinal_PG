<?php
session_start(); 
if($_SESSION['u_valido'] == false ){
header('location: login.html');
} 
?>
 <?php
    require_once('header2.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="../../../imagenes/Logo_Dreamhome.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CDN  PARA BOOTSTRAP -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="../../javascript/validacionBranch.js"></script>
    <link rel="stylesheet" href="../../../estilos/header.css" id="theme-stylesheet">
    <title>Dreamhome Inicio</title>

    <!-- CDN  PARA LA TABLA PERSONALIZADA -->
    <link href="https://cdn.jsdelivr.net/npm/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript"></script>
    
</head>

<body>
    <script>
        function alertPvto(){
            alert("Aceptar para Eliminar"); 
        }
    </script>



    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Agrega tu Vivienda
                    </div>
                    <div class="card-body">
                        <form action="../controlador/procesar_abcc_dreamhome.php" method="POST">
                            <div class="mb-3">
                                <label for="txtStreet" class="form-label">Calle</label>
                                <input type="text" class="form-control" name="txtStreet" id="txtStreet" placeholder="4 Caracteres">
                            </div>

                            <div class="mb-3">
                                <label for="txtCity" class="form-label">Ciudad</label>
                                <input type="text" class="form-control" name="txtCity" id="txtCity" placeholder="Nombre de la Calle">
                            </div>

                            <div class="mb-3" class="valid-feedback">
                                <label for="txtpostCode" class="form-label">Código Postal</label>
                                <input type="text" class="form-control" name="txtpostCode" id="txtpostCode" placeholder="Nombe de la Ciudad">
                            </div>

                            <div class="mb-3">
                                <label for="txtTipo" class="form-label">Tipo de Vivienda</label>
                                <select class="form-select" id="typo" name="typo">
                                    <option value="casa">Casa</option>
                                    <option value="depa">Departamento</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="txtpostCode" class="form-label">Cantidad de Cuartos</label>
                                <input type="text" class="form-control" name="txtCuarto" id="txtpostCode" placeholder="Codigo Postal">
                            </div>

                            <div class="mb-3">
                                <label for="txtpostCode" class="form-label">Renta</label>
                                <input type="text" class="form-control" name="txtRenta" id="txtpostCode" placeholder="Codigo Postal">
                            </div>
                            <br>
                            <div class="btn-group" role="group">
                                <button type="submit" class="btn btn-success" onclick= " return validacionHeader()">Agregar</button>
                                <button id="btnCancelar" type="button" class="btn btn-">Borrar Todo</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <table id="tabla" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Num Propiedad</th>
                            <th>Calle</th>
                            <th>Ciudad</th>
                            <th>Código Postal</th>
                            <th>Vivienda</th>
                            <th>Cuartos</th>
                            <th>Renta</th>
                            <th>Modificar Registro</th>
                            <th>Eliminar Registro</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            include('../modelo/dreamhomeDAO.php');
                            $branchDao = new DreamhomeDAO();
                            $res = $branchDao->mostrar();

                            if (mysqli_num_rows($res) > 0) {
                                //echo "<table class= 'table table-striped table-bordered'>";
                                while ($fila = mysqli_fetch_assoc($res)) {
                                    printf("<tr>
                                         <td>" . $fila['propertyNo'] . "</td>" .
                                        "<td>" . $fila['street'] . "</td>" .
                                        "<td>" . $fila['city'] . "</td>" .
                                        "<td>" . $fila['postcode'] . "</td>" .
                                        "<td>" . $fila['typo'] . "</td>" .
                                        "<td>" . $fila['rooms'] . "</td>" .
                                        "<td>" . $fila['rent'] . "</td>" .
                                        "<td> <a class='btn btn-info' href='formulario_modificaciones.php?id=". $fila["propertyNo"] ."' data-bs-toggle='modal'>SELECCIONAR</a></td>".
                                        "<td> <a href='../controlador/procesar_bajas.php?propertyNo=%s' class= 'btn btn-danger' onclick='return alertPvto()'> ELIMINAR</a>  </td> </tr>", $fila['propertyNo']);
                                }
                            } else {
                                echo "SIN REGISTROS PARA MOSTRAR";
                            }

                            ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
    var tabla = document.querySelector('#tabla');
    var dataTable = new DataTable(tabla);
</script>
</body>

</html>