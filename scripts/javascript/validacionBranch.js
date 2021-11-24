function validacionHeader(){
    var b = document.getElementById('txtBranch'); 
    var s = document.getElementById('txtStreet'); 
    var c = document.getElementById('txtCity'); 
    var pc = document.getElementById('txtpostCode'); 

    if(b.value==='' || s.value==='' || c.value==='' || pc.value===''){
        alert("Por favor, introduzca todos los datos");
        return false;
    }
    return true; 
}