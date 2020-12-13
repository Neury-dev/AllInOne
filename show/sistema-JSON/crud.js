var jsonObject, id, marca, nombre, precio, enviar; 

const crear         = document.querySelector("#crear");
const leerDatos     = document.querySelector("#n-leer");
const leerResponde  = document.querySelector("#n-respuesta");

id      = document.querySelector("#id");
marca   = document.querySelector("#marca");
nombre  = document.querySelector("#nombre");
precio  = document.querySelector("#precio");
enviar  = document.querySelector("#crear-envio");
/*
    *leer (creados, leer, actualizaciones, borrados) 
 */
function 
leer(busqueda) {
    fetch("show-json/sistema-JSON/sistema-JSON.json", {
        method: "POST",
        body: busqueda
    }).then(function(response) {
        if(response.ok) { return response.json(); } 
        else { throw "Error en la llamada"; }
    }).then(function(json) {
//        console.log(json[0].marca);
        jsonObject = json;
        lectura();
    });
}
function 
lectura() {
    let salida = "";
    
    for(let i in jsonObject) {
        salida += `
            <tr>
                <td>${jsonObject[i].id}</td>
                <td>${jsonObject[i].fecha}</td>
                <td>${jsonObject[i].fecha}</td>
                <td>${jsonObject[i].marca}</td>
                <td>${jsonObject[i].nombre}</td>
                <td>${jsonObject[i].precio}</td>
                <td>
                    <button type='submit' onclick=actualizar(${jsonObject[i].id})>Editar</button>
                </td> 
                <td>
                    <button type='button' onclick=borrar(${jsonObject[i].id})>Borrar</button>
                </td>  
            </tr>
        `;
    }
    
    leerDatos.innerHTML= salida;
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
        leer();
        leerResponde.innerHTML = texto;
    });
}
leer();