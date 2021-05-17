var id, marca, nombre, precio, enviar, buscar; 

const crear         = document.querySelector("#crear");
const leerDatos     = document.querySelector("#n-leer");
const leerResponde = document.querySelector("#n-respuesta");

id      = document.querySelector("#id");
marca   = document.querySelector("#marca");
nombre  = document.querySelector("#nombre");
precio  = document.querySelector("#precio");
enviar  = document.querySelector("#crear-envio");
buscar  = document.querySelector("#buscar");

leer();
function 
leer(busqueda) {
    fetch("sql/sistema-PHP/Leer.php", {
        method: "POST",
        body: busqueda
    }).then(function(response) {
        if(response.ok) { 
            return response.text(); 
//            return response.json(); 
        } 
        else { throw "Error en la llamada"; }
    }).then(function(texto) {
        leerDatos.innerHTML = texto;
//        if (texto.length === 10) {
//            console.log(texto[0]);
//            jsonObject = texto;
//        }
//        jsonObject = texto;
//        displayResults();
//        console.log(texto[0]);
//        jsonObject = texto;
        
//        if(jsonObject.length === 10) {
//            nav.style.display = 'block';
//        } else {
//            nav.style.display = 'none';
//        }
//        
//        let output = "";
//
//        for(let i in jsonObject) {
//            output += `
//                <tr>
//                    <td>${jsonObject[i].id}</td>
//                    <td>${jsonObject[i].fecha}</td>
//                    <td>${jsonObject[i].hora}</td>
//                    <td>${jsonObject[i].marca}</td>
//                    <td>${jsonObject[i].nombre}</td>
//                    <td>${jsonObject[i].precio}</td>
//                    <td>
//                        <button type='submit' onclick=actualizar(${jsonObject[i].id})>Editar</button>
//                    </td> 
//                    <td>
//                        <button type='button' onclick=borrar(${jsonObject[i].id})>Borrar</button>
//                    </td>  
//                </tr>
//            `;
//        }
//        leerDatos.innerHTML = output;
    });
}
crear.addEventListener('submit', function(e) {
    e.preventDefault();
    
    let id          = document.forms["crear"]["id"].value;
    let marca       = document.forms["crear"]["marca"].value;
    let nombre      = document.forms["crear"]["nombre"].value;
    let precio      = document.forms["crear"]["precio"].value;
    let crearEnvio  = document.forms["crear"]["crear-envio"].value;

    let datos           = new FormData(crear);
    
    datos.append('id', id);
    datos.append('marca', marca);
    datos.append('nombre', nombre);
    datos.append('precio', precio);
    datos.append('crear-envio', crearEnvio);

    fetch('sql/sistema-PHP/Crear.php', {
        method: 'POST',
        body: datos
    }).then(function(response) {
        if(response.ok) { return response.text(); } 
        else { throw "Error en la llamada"; }
    }).then(function(texto) { //console.log(texto);
        enviar.value = "Crear";
        crear.reset();
        leerResponde.innerHTML = texto;
        location.reload();
    }).catch(function(error) {
        console.log(error);
    });
});
function 
actualizar(editarID) {
    fetch("sql/sistema-PHP/Actualizar.php", {
        method: "POST",
        body: editarID
    }).then(function (response) {
        if(response.ok) { return response.json(); } 
        else { throw "Error en la llamada"; }
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
    fetch("sql/sistema-PHP/Borrar.php", {
        method: "POST",
        body: borrarID
    }).then(function(response) {
        if(response.ok) { return response.text(); } 
        else { throw "Error en la llamada"; }
    }).then(function(texto) {
        leerResponde.innerHTML = texto;
        location.reload();
    });
}
function paginacion() {
    window.onload = function() {
        fetch("sql/sistema-PHP/sistema_PHP.php"
//        , {
//            method: "POST",
//            body: borrarID
//        }
          ).then(function(response) {
            if(response.ok) { return response.text(); } 
            else { throw "Error en la llamada"; }
        }).then(function(texto) {
            leerResponde.innerHTML = texto;
            location.reload();
        });
    };
}
//var url     = 'http://localhost/AllInOne/sistema_PHP.php';
//var url2    = window.location.href;
//var myHeaders = new Headers();
//
//console.log(window.location.href);
//buscar.addEventListener('submit', function(e) {
//    
////    document.querySelector("#buscar").submit();
//    fetch(url).then(function(response) {
//        if(response.ok) { return response.text(); } 
//        else { throw "Error en la llamada"; }
//    }).then(function(texto) { 
//        console.log(texto);
////        enviar.value = "Crear";
////        crear.reset();
////        leerResponde.innerHTML = texto;
////        location.reload();
//    }).catch(function(error) {
//        console.log(error);
//    });
//});


//cantidad.addEventListener("input", function() {
//    cantidad = document.forms["mas"]["mas"].value;
////    document.addEventListener('submit', function() {
////        const masForm = document.querySelector("#mas-form");
////        let numero = document.forms["mas"]["mas"].value;
////
////        let dat = new FormData(masForm);
////
////        dat.append('mas', numero);
////
////
////        fetch("sql/sistema-PHP/Leer.php", {
////            method: "POST",
////            body: document.forms["mas"]["mas"].value
////        }).then(function(response) {
////            if(response.ok) { return response.text(); } 
////            else { throw "Error en la llamada"; }
////        }).then(function(texto) {
//             if (cantidad === "") { leer(); } 
//    else { 
//        leer(cantidad); 
//        console.log(cantidad);
//    }
    
//            return leerDatos.innerHTML = texto;
//        });
//    });
 
//});
/*
    *leer (creados, leer, actualizaciones, borrados) + (busquedas)   
 */
