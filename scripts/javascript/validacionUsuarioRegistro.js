function validacionDatos() {
    var nombre = document.getElementById('nombre');
    var apellidos = document.getElementById('apellidos');
    var fecha = document.getElementById('fecha');
    var correo = document.getElementById('correo_usu');
    var contra = document.getElementById('pass_usu');

    if (nombre.value === '' || apellidos.value==='' || fecha.value==='' || correo.value==='' || contra.value==='') {
        alert("Por favor, introduzca todos los datos");
        return false; 
    }
    return true;
}