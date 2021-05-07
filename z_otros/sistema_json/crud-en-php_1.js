var jsonObject, id, marca, nombre, precio, enviar; 

const crear         = document.querySelector("#crear");
const leerDatos     = document.querySelector("#n-leer");
const leerResponde  = document.querySelector("#n-respuesta");

id      = document.querySelector("#id");
marca   = document.querySelector("#marca");
nombre  = document.querySelector("#nombre");
precio  = document.querySelector("#precio");
enviar  = document.querySelector("#crud");
/*
    *leer (creados, leer, actualizaciones, borrados) 
 */
function 
leer(busqueda) {
    fetch("../../sql/sistema-JSON/en-php.php", {
        method: "POST",
        body: busqueda
    }).then(function(response) {
        if(response.ok) { 
            return response.text(); 
        } 
        else { throw "Error en la llamada"; }
    }).then(function(texto) {
        leerDatos.innerHTML= texto;
    });
}
crear.addEventListener('submit', function(e) {
    e.preventDefault();
    
    let id          = document.forms["crear"]["id"].value;
    let fecha       = document.forms["crear"]["fecha"].value;
    let marca       = document.forms["crear"]["marca"].value;
    let nombre      = document.forms["crear"]["nombre"].value;
    let precio      = document.forms["crear"]["precio"].value;
    let crearEnvio  = document.forms["crear"]["crud"].value;

    let datos           = new FormData(crear);
    
    datos.append('id', id);
    datos.append('fecha', fecha);
    datos.append('marca', marca);
    datos.append('nombre', nombre);
    datos.append('precio', precio);
    datos.append('crud', crearEnvio);

    fetch('../../sql/sistema-JSON/EnPHP.php', {
        method: 'POST',
        body: datos
    }).then(function(response) {
        if(response.ok) { return response.text(); } 
        else { throw "Error en la llamada"; }
    }).then(function(texto) {
        enviar.value = "Crear";
        crear.reset();
        leer();
        leerResponde.innerHTML = texto;
    }).catch(function(error) {
        console.log(error);
    });
});
function 
actualizar(idUnico) {
    const escogerForm = document.querySelector("#borrar" + idUnico);

    escogerForm.addEventListener('submit', function (e) {
        e.preventDefault();

        let id = document.forms["actualizar" + idUnico]["id"].value;
        let escogerArticulo = document.forms["actualizar" + idUnico]["crud"].value;

        datos = new FormData(escogerForm);

        datos.append('id', id);
        datos.append('crud', escogerArticulo);

        fetch('', {
            method: 'POST',
            body: datos
        }).then(function (response) {
            if (response.ok) {
                return response.text();
            } else {
                throw "Error en la llamada";
            }
        }).then(function (texto) {
            leer();
//            leerResponde.innerHTML = texto;
            console.log(texto);
        }).catch(function (error) {
            console.log(error);
        });
    });
}
function
borrar(idUnico) {
    const escogerForm = document.querySelector("#borrar" + idUnico);

    escogerForm.addEventListener('submit', function (e) {
        e.preventDefault();

        let id = document.forms["borrar" + idUnico]["id"].value;
        let escogerArticulo = document.forms["borrar" + idUnico]["crud"].value;

        datos = new FormData(escogerForm);

        datos.append('id', id);
        datos.append('crud', escogerArticulo);

        fetch('../../sql/sistema-JSON/EnPHP.php', {
            method: 'POST',
            body: datos
        }).then(function (response) {
            if (response.ok) {
                return response.text();
            } else {
                throw "Error en la llamada";
            }
        }).then(function (texto) {
            leer();
//            leerResponde.innerHTML = texto;
            console.log(texto);
//            alertaGeneral.innerHTML = "Acaba de devolver uno escogido.";
//            alertaGeneral.className = "n-mostrar";
//
//            setTimeout(function () {
//                alertaGeneral.className = alertaGeneral.className.replace("n-mostrar", "");
//            }, 4000);
//            setTimeout(function () {
//                location.reload();
//            }, 4100);
        }).catch(function (error) {
            console.log(error);
        });
    });
}
leer();