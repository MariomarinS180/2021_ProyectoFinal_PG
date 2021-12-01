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
        $ruta = "../controlador/modificar.php";
        //var_dump($res);

        if(mysqli_num_rows($res)>0){

    
                   echo "<form action='../controlador/procesar_modificaciones.php' method='post'><br><table id='tabla' class='display table table-hover text-nowrap' style='width:50%'>
                        <thead>
                            <tr>
                                
                                <th>Street</th>
                                <th>City</th>
                                <th>PostCode</th>
                                
                                
                            </tr>
                        </thead>";
            

            while($fila = mysqli_fetch_assoc($res)){
                printf("<tr>
                <td><input type='hidden' value='". $fila["branchNo"]."' name='num'></input>

                <input type='text' value='". $fila["street"]."' name='nom'></input></td>".

                "<td><input type='text' value='". $fila["city"]."' name='pa'></input></td>".

                "<td><input type='text' value='". $fila["postcode"]."' name='sa'></input></td>".

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