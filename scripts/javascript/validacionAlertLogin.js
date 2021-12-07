function validarLoginConAlert(){
    var contra = document.getElementById('inputPassword');
    var pass = document.getElementById('inputPassword');
        if (pass.value !== '') {
            $(document).ready(function () {
                $('#alertaAgregar').html("Contraseña Insegura").addClass("alert alert-danger");
                return false;
            });
        }else{
            $(document).ready(function () {
                $('#alertaAgregar').html("Contraseña Segura").addClass("alert alert-danger");
                return false;
            }); 
        }
        return true;
}