function validarLoginConAlert(){
    var contra = document.getElementById('inputPassword');
    var pass = document.getElementById('inputPassword');
        if (contra.value !== '' || pass.value!=='' ) {
            $(document).ready(function () {
                $('#alertaAgregar').html("DATOS INCORRECTOS").addClass("alert alert-danger");
                return false;
            });
        }
        return true;
}