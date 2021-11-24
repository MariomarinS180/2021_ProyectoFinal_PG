<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="imagenes/Logo_Dreamhome.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" >
    
    <title>Dreamhome Inicio</title>
</head>
<body>
    <div id="mensaje"> </div>

    <div class="container">
        <div class= "row">
            <div class = "col-5">
                <form action="">
                    <div class="card">
                        <div class="card-header">
                            Departamentos
                        </div>
                        <div class="card-body">
                            <form action="">
                                <div class="mb-3">
                                  <label for="txtBranch" class="form-label">BranchNo</label>
                                  <input type="text"
                                    class="form-control" name="txtBranch" id="txtBranch" aria-describedby="helpId" placeholder="4 Caracteres">
                                </div>

                                <div class="mb-3">
                                  <label for="txtStreet" class="form-label">Street</label>
                                  <input type="text"
                                    class="form-control" name="txtStreet" id="txtStreet" aria-describedby="helpId" placeholder="Nombre de la Calle">
                                </div>

                                <div class="mb-3">
                                  <label for="txtCity" class="form-label">City</label>
                                  <input type="text"
                                    class="form-control" name="txtCity" id="txtCity" aria-describedby="helpId" placeholder="Nombe de la Ciudad">
                                </div>

                                <div class="mb-3">
                                  <label for="txtpostCode" class="form-label">PostCode</label>
                                  <input type="text"
                                    class="form-control" name="txtpostCode" id="txtpostCode" aria-describedby="helpId" placeholder="Codigo Postal">
                                </div>

                                <div class="btn-group" role="group" aria-label="">
                                    <button id="btnAgregar"  type="button" class="btn btn-success">Agregar</button>
                                    <button id="btnEditar" type="button" class="btn btn-warning">Editar</button>
                                    <button id="btnCancelar" type="button" class="btn btn-primary">Cancelar</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-muted">
                            Footer
                        </div>
                    </div>
                </form>
            </div>
            <div class = "col-7">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Branch No</th>
                            <th>Stree</th>
                            <th>City</th>
                            <th>Postcode</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>B1</td>
                            <td>Gomez</td>
                            <td>Zac</td>
                            <td>99300</td>
                            <td>Seleccionar | Borrar</td>
                        </tr>
                        <tr>
                            <td scope="row"></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                
            </div>

        </div>
    </div>


    <script>
        $(document).ready(function(){
            $('#mensaje').html("HOLA MUNDO CON JQUERY"); 
        });

    </script>




</body>
</html>