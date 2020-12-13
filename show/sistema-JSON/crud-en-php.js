var jsonObject, id, marca, nombre, precio, enviar; 

const crear         = document.querySelector("#crear");
const leerDatos     = document.querySelector("#n-leer");
const leerResponde  = document.querySelector("#n-respuesta");

id      = document.querySelector("#id");
fecha   = document.querySelector("#fecha");
marca   = document.querySelector("#marca");
nombre  = document.querySelector("#nombre");
precio  = document.querySelector("#precio");
enviar  = document.querySelector("#crud");
/*
    *leer (creados, leer, actualizaciones, borrados) 
 */
function 
leer(busqueda) {
    fetch("../../sql/sistema-JSON/EnPHP.php", {
        method: "POST",
        body: busqueda
    }).then(function(response) {
        if(response.ok) { return response.json(); } 
        else { throw "Error en la llamada"; }
    }).then(function(json) {
        jsonObject = json;

        let salida = "";
//        console.log(jsonObject);
        for(let i in jsonObject) {
//        console.log(jsonObject);
            salida +=  `
                <tr>
                    <td>${jsonObject[i].ID}</td>
                    <td>${jsonObject[i].FECHA}</td>
                    <td>${jsonObject[i].FECHA}</td>
                    <td>${jsonObject[i].MARCA}</td>
                    <td>${jsonObject[i].NOMBRE}</td>
                    <td>${jsonObject[i].PRECIO}</td>
                    <td>
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST"
                        name="actualizar${jsonObject[i].ID}" id="actualizar${jsonObject[i].ID}">
                            <input type="hidden" name="id" value="${jsonObject[i].ID}">
                            <button type="submit" name="crud" value="Editar" onclick="actualizar(${jsonObject[i].ID})">
                                Editar
                            </button>
                        </form>
                    </td> 
                    <td>
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" 
                        name="borrar${jsonObject[i].ID}" id="borrar${jsonObject[i].ID}">
                            <input type="hidden" name="id" value="${jsonObject[i].ID}">
                            <button type="submit" name="crud" value="Borrar" onclick="borrar(${jsonObject[i].ID})">
                                Borrar
                            </button>
                        </form>
                    </td>  
                </tr>
            `;
        }
        leerDatos.innerHTML = salida;
//        lectura();
    });
}
//function 
//lectura() {
//    let salida = "";
//    
//        jsonObject.forEach(function(element) {
////            console.log("--" + element.id + " : " + element.ID + + " : " + element.FECHA + "--");
//        
//            salida +=  `
//                <tr>
//                    <td>${element.ID}</td>
//                    <td>${element.FECHA}</td>
//                    <td>${element.FECHA}</td>
//                    <td>${element.MARCA}</td>
//                    <td>${element.NOMBRE}</td>
//                    <td>${element.PRECIO}</td>
//                    <td>
//                        <button type='submit' onclick=actualizar(${element.ID})>Editar</button>
//                    </td> 
//                    <td>
//                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" 
//                        name="borrar${element.ID}" id="borrar${element.ID}">
//                            <input type="hidden" name="id" value="${element.ID}">
//                            <button type="submit" name="crud" value="Borrar" onclick="borrar(${element.ID})">
//                                Borrar
//                            </button>
//                        </form>
//                    </td>  
//                </tr>
//            `;
//        });
//    leerDatos.innerHTML= salida;
//}

crear.addEventListener('submit', function(e) {
    e.preventDefault();
    
    let id          = document.forms["crear"]["id"].value;
    let fecha       = document.forms["crear"]["fecha"].value;
    let marca       = document.forms["crear"]["marca"].value;
    let nombre      = document.forms["crear"]["nombre"].value;
    let precio      = document.forms["crear"]["precio"].value;
    let crearEnvio  = document.forms["crear"]["crud"].value;

    let datos       = new FormData(crear);
    
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
        leerResponde.innerHTML = "Creado con exito.";
    }).catch(function(error) {
        console.log(error);
    });
});
function 
actualizar(idU) {
    const formCRUD = document.querySelector("#actualizar" + idU);

    formCRUD.addEventListener('submit', function (e) {
        e.preventDefault();

        let idEntrante  = document.forms["actualizar" + idU]["id"].value;
        let editar      = document.forms["actualizar" + idU]["crud"].value;

        datos           = new FormData(formCRUD);

        datos.append('id', idEntrante);
        datos.append('crud', editar);

        fetch('../../sql/sistema-JSON/Actualizar.php', {
            method: 'POST',
            body: datos
        }).then(function (response) {
            if (response.ok) { return response.json(); } 
            else { throw "Error en la llamada"; }
        }).then(function (json) {
            //console.log(json);console.log(json.ID);
            
            id.value        = json.ID;
            fecha.value     = json.FECHA;
            marca.value     = json.MARCA;
            nombre.value    = json.NOMBRE;
            precio.value    = json.PRECIO;
            enviar.value    = "Actualizar";

            leerResponde.innerHTML = "Listo para actualizar";
        }).catch(function (error) {
            console.log(error);
        });
    });
}
function
borrar(idD) {
    const formCRUD = document.querySelector("#borrar" + idD);

    formCRUD.addEventListener('submit', function (e) {
        e.preventDefault();

        let id = document.forms["borrar" + idD]["id"].value;
        let escogerArticulo = document.forms["borrar" + idD]["crud"].value;

        datos = new FormData(formCRUD);

        datos.append('id', id);
        datos.append('crud', escogerArticulo);

        fetch('../../sql/sistema-JSON/EnPHP.php', {
            method: 'POST',
            body: datos
        }).then(function (response) {
            if (response.ok) { return response.text(); } 
            else { throw "Error en la llamada"; }
        }).then(function (texto) {//console.log(texto);
            leer();
            leerResponde.innerHTML = "Se ha borrado correctamente";
        }).catch(function (error) {
            console.log(error);
        });
    });
}
leer();