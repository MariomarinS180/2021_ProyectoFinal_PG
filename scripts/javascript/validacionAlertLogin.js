function validarLoginConAlert(){
    var contra = document.getElementById('inputPassword');
    var pass = document.getElementById('inputPassword');
        if (pass.value === '') {
            $(document).ready(function () {
                $('#alertaAgregar').html("Introduzca la Contraseña").addClass("alert alert-danger");
                return false;
            });
        }else if(contra.value === ''){
            $(document).ready(function () {
                $('#alertaAgregar').html("Introduzca la Contraseña").addClass("alert alert-danger");
                return false;
            });
        }
        return true;
}