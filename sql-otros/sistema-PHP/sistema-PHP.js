var form        = document.querySelector("#form");
var crear       = document.querySelector("#crear");
var leerDatos   = document.querySelector("#n-leer");

var id      = document.querySelector("#id");
var marca   = document.querySelector("#marca");
var nombre  = document.querySelector("#nombre");
var precio  = document.querySelector("#precio");

var buscar  = document.querySelector("#buscar");

leer();
function leer(busqueda) {
    fetch("sql/sistema-PHP/listar.php", {
        method: "POST",
        body: busqueda
    }).then(response => response.text()).then(response => {
        leerDatos.innerHTML = response;
    });
}
crear.addEventListener("submit", (e) => {
    e.preventDefault();
    let idUnico         = document.forms["form"]["id"].value;
    let marca           = document.forms["form"]["marca"].value;
    let nombre          = document.forms["form"]["nombre"].value;
    let precio          = document.forms["form"]["precio"].value;
    
    let datos           = new FormData(form);
    
    datos.append('id', idUnico);
    datos.append('marca', marca);
    datos.append('nombre', nombre);
    datos.append('precio', precio);
    
    fetch("sql/sistema-PHP/registrar.php", {
        method: "POST",
        body: datos
//          new FormData(form)
    }).then(response => response.text()).then(response => {
        if (response === "ok") {
            form.reset();
            leer();
        } else {
            crear.innerHTML = "Crear";
            id.value = "";
            leer();
            form.reset();
        }
    });
});
//crear.addEventListener("click", () => {
//    fetch("sql/sistema-PHP/registrar.php", {
//        method: "POST",
//        body: new FormData(form)
//    }).then(function(response) {
//        if (response.ok) { 
//            form.reset();
//            leer();
//            return response.text();
//        } else { 
//            crear.value = "Registrar";
//            id.value = "";
//            leer();
//            form.reset();
//            throw "Error en la llamada"; 
//        }
//    }).catch(function(error) {
//        console.log(error);
//    });
//});
function 
borrar(borrarID) {
    fetch("sql/sistema-PHP/eliminar.php", {
        method: "POST",
        body: borrarID
    }).then(response => response.text()).then(response => {
        if (response === "ok") {
            leer();
        }
    });
}
function actualizar(editarID) {
    fetch("sql/sistema-PHP/editar.php", {
        method: "POST",
        body: editarID
    }).then(response => response.json()).then(response => {
        id.value        = response.id;
        marca.value     = response.codigo;
        nombre.value    = response.producto;
        precio.value    = response.precio;
        crear.innerHTML = "Actualizar";
    }).catch(function(error) {
        console.log(error);
    });
}

buscar.addEventListener("keyup", () => {
    const valor = buscar.value;
    if (valor === "") {
        leer();
    } else {
        leer(valor);
    }
});
