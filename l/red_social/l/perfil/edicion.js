const editarNombre      = document.querySelector("#nombre");
const editarApellido    = document.querySelector("#apellido");
const editarNacimiento  = document.querySelector("#nacimiento");
const editarCorreo      = document.querySelector("#correo");
const editarNumero      = document.querySelector("#numero");
const editarSexo        = document.querySelector("#sexo");
const editarPais        = document.querySelector("#pais");
const editarFecha       = document.querySelector("#fecha");

var jsonObject;
/*
--------------------------------------------------------------------------------*/
function 
leer(irPor) {
    fetch("../../../s/red_social/l/Datos.php", {
        method: "POST",
        body: irPor
    }).then(function(response) {
        if(response.ok) { 
            return response.json(); 
        } else { 
            throw "Error con la respuesta."; 
        }
    }).then(function(json) {
        jsonObject = json;
        
        Datos.deEdicion();
    });
}

class Datos {
    static
    deEdicion() {
        editarNombre.value        = jsonObject[0].nombre;
        editarApellido.value      = jsonObject[0].apellido;
        editarCorreo.value        = jsonObject[0].correo;
        editarNumero.value        = jsonObject[0].numero;
//        sexo.value          = jsonObject[0].sexo;
        editarNacimiento.value    = jsonObject[0].nacimiento;
//        pais.value          = jsonObject[0].pais;
    }
}

//crear.addEventListener('submit', function(e) {
//    e.preventDefault();
//    
//    let id          = document.forms["crear"]["id"].value;
//    let marca       = document.forms["crear"]["marca"].value;
//    let nombre      = document.forms["crear"]["nombre"].value;
//    let precio      = document.forms["crear"]["precio"].value;
//    let crearEnvio  = document.forms["crear"]["crear-envio"].value;
//
//    let datos           = new FormData(crear);
//    
//    datos.append('id', id);
//    datos.append('marca', marca);
//    datos.append('nombre', nombre);
//    datos.append('precio', precio);
//    datos.append('crear-envio', crearEnvio);
//
//    fetch('s/sistema_php/Crear.php', {
//        method: 'POST',
//        body: datos
//    }).then(function(response) {
//        if(response.ok) { return response.text(); } 
//        else { throw "Error con la respuesta."; }
//    }).then(function(texto) {
//        enviar.value = "Crear";
//        crear.reset();
//        leer();
//        leerResponde.innerHTML = texto;
//    }).catch(function(error) {
//        console.log(error);
//    });
//});








function 
actualizar(editarID) {
    fetch("s/sistema_php/Actualizar.php", {
        method: "POST",
        body: editarID
    }).then(function (response) {
        if(response.ok) { return response.json(); } 
        else { throw "Error con la respuesta."; }
    }).then(function (json) {
        id.value        = json[0].id;
        marca.value     = json[0].marca;
        nombre.value    = json[0].nombre;
        precio.value    = json[0].precio;
        enviar.value    = "Actualizar";
        
        leerResponde.innerHTML = "Listo para actualizar";
    }).catch(function (err) {
        console.log('Fetch problem: ' + err.message);
    });
}
function 
borrar(borrarID) {
    fetch("s/sistema_php/Borrar.php", {
        method: "POST",
        body: borrarID
    }).then(function(response) {
        if(response.ok) { return response.text(); } 
        else { throw "Error con la respuesta."; }
    }).then(function(texto) {
        leer();
        leerResponde.innerHTML = texto;
    });
}
leer();

