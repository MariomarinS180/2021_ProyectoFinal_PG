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
    <title>Document</title>
    <style>
        input{
            padding: 0;
            margin: 0;
        }
        th, td{
            
            padding: 0;
            margin: 0;
        }
    </style>
</head>
<body>

<?php
        include('../modelo/dreamhomeDAO.php');
        $aDAO = new DreamhomeDAO();
        $id = $_GET["id"];
        $res = $aDAO->mostrarAlumnosPorNc($id);
        //$ruta = "../controlador/procesar_modificaciones";
        //var_dump($res);

        if(mysqli_num_rows($res)>0){

                   echo "<form action='../controlador/procesar_modificaciones.php' method='post'><br><table id='tabla' class='display table table-hover text-nowrap' style='width:50%'>
                        <thead>
                            <tr>
                                <th>Calle</th>
                                <th>Ciudad</th>
                                <th>Código Postal</th>
                                <th>Vivienda</th>
                                <th>Cuartos</th>
                                <th>Renta</th>
                            </tr>
                        </thead>";
            

            while($fila = mysqli_fetch_assoc($res)){
                printf("<tr>
                <td><input type='hidden' value='". $fila["propertyNo"]."' name='prop'></input>

                <input type='text' value='". $fila["street"]."' name='street'></input></td>".

                "<td><input type='text' value='". $fila["city"]."' name='c'></input></td>".

                "<td><input type='text' value='". $fila["postcode"]."' name='pc'></input></td>".

                "<td><input type='text' value='". $fila["typo"]."' name='ty'></input></td>".

                "<td><input type='text' value='". $fila["rooms"]."' name='roms'></input></td>".

                "<td><input type='text' value='". $fila["rent"]."' name='rn'></input></td>".

                "<td><input type='submit' value='Actualizar'></input></td>"  
                                
            );
            }

        }else{
            echo "SIN registros para mostrar";
        }
        echo "</table> </form> ";
    ?>
    
</body>
</html>