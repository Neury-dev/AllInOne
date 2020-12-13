var jsonObject, id, marca, nombre, precio, enviar; 

const crear         = document.querySelector("#crear");
const leerDatos     = document.querySelector("#n-leer");
const leerResponde  = document.querySelector("#n-respuesta");

id      = document.querySelector("#id");
fecha   = document.querySelector("#fecha");
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
//        console.log(json[0]);
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
                <td>${jsonObject[i].ID}</td>
                <td>${jsonObject[i].FECHA}</td>
                <td>${jsonObject[i].FECHA}</td>
                <td>${jsonObject[i].MARCA}</td>
                <td>${jsonObject[i].NOMBRE}</td>
                <td>${jsonObject[i].PRECIO}</td>
                <td>
                    <button type='submit' onclick=actualizar(${jsonObject[i].ID})>Editar</button>
                </td> 
                <td>
                    <button type='button' onclick=borrar(${jsonObject[i].ID})>Borrar</button>
                </td>  
            </tr>
        `;
    }
    
    leerDatos.innerHTML= salida;
}

crear.addEventListener('submit', function(e) {
    e.preventDefault();
    
    let id          = document.forms["crear"]["id"].value;
    let fecha       = document.forms["crear"]["fecha"].value;
    let marca       = document.forms["crear"]["marca"].value;
    let nombre      = document.forms["crear"]["nombre"].value;
    let precio      = document.forms["crear"]["precio"].value;
    let crearEnvio  = document.forms["crear"]["crear"].value;

    let datos           = new FormData(crear);
    
    datos.append('id', id);
    datos.append('fecha', fecha),
    datos.append('marca', marca);
    datos.append('nombre', nombre);
    datos.append('precio', precio);
    datos.append('crear', crearEnvio);

    fetch('sql/sistema-JSON/Crear.php', {
        method: 'POST',
        body: datos
    }).then(function(response) {
        if(response.ok) { return response.text(); } 
        else { throw "Error en la llamada"; }
    }).then(function(texto) {//console.log(texto);
        enviar.value = "Crear";
        crear.reset();
        leer();
        leerResponde.innerHTML = texto;
    }).catch(function(error) {
        console.log(error);
    });
});
function 
actualizar(idU) {
    fetch("sql/sistema-JSON/Editar.php", {
        method: "POST",
        body: idU
    }).then(function (response) {
        if(response.ok) { return response.json(); } 
        else { throw "Error en la llamada"; }
    }).then(function (json) {
//        console.log(json);
        id.value        = json.ID;
        fecha.value     = json.FECHA;
        marca.value     = json.MARCA;
        nombre.value    = json.NOMBRE;
        precio.value    = json.PRECIO;
        enviar.value    = "Actualizar";
        
        leerResponde.innerHTML = "Listo para actualizar";
    }).catch(function (err) {
        console.log('Fetch problem: ' + err.message);
    });
}
function 
borrar(borrarID) {
    fetch("sql/sistema-JSON/Borrar.php", {
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