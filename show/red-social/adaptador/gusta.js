var jsonObject;
/*
    * GustaSi 
 */
function 
gustaSI(id) {
    const gustaSi = document.querySelector("#gusta-si"+id);
    
    gustaSi.addEventListener('submit', function (e) {
        e.preventDefault();

        let publicacionSi   = document.forms["gusta-si"+id]["publicacion-si"].value;
        let gustaSiBoton    = document.forms["gusta-si"+id]["gusta-si-boton"].value;

        let datos = new FormData(gustaSi);

        datos.append('publicacion-si', publicacionSi);
        datos.append('gusta-si-boton', gustaSiBoton);

        fetch('../../sql/red-social/GustaSi.php', {
            method: 'POST',
            body: datos
        })
          .then(function (response) {
              if (response.ok) {
                  return response.text();
              } else {
                  throw "Error en la llamada";
              }
          }).then(function (texto) {
            Obtener.publicacion();
  
            console.log(publicacionSi + "" + texto);
        }).catch(function (error) {
            console.log(error);
        });
    });
}
/*
    * GustaNo 
 */
function 
gustaNo(id) {
    const gustaNo = document.querySelector("#gusta-no"+id);
    
    gustaNo.addEventListener('submit', function (e) {
        e.preventDefault();

        let publicacionNo = document.forms["gusta-no"+id]["publicacion-no"].value;
        let gustaNoBoton  = document.forms["gusta-no"+id]["gusta-no-boton"].value;
        
        let datos = new FormData(gustaNo);

        datos.append('publicacion-no', publicacionNo);
        datos.append('gusta-no-boton', gustaNoBoton);
        
        fetch('../../sql/red-social/GustaNo.php', {
            method: 'POST',
            body: datos
        })
          .then(function (response) {
              if (response.ok) {
                  return response.text();
              } else {
                  throw "Error en la llamada";
              }
          }).then(function (texto) {
              console.log(publicacionNo + "" + texto);
        }).catch(function (error) {
            console.log(error);
        });
    });
}

//var botonGusta = document.querySelector("#gusta-si-icono");

//function 
//gustas() {
//    fetch('../../sql/red-social/Gustas.php', {
//        method: 'GET'
//    }).then(function (response) {
//        if(response.ok) { return response.json(); } 
//        else { console.log("..........................................."); }
//    }).then(function (json) {
//        jsonObject = json;
//
//        console.log(jsonObject);
//
//        let salida = "";
//
//        for (let i in jsonObject) {;
//            salida += `<span>${jsonObject[i].gustaSi}</span>`;
//        }
//
//        document.querySelectorAll(".gustas").innerHTML = salida;
//    }).catch(function (err) {
//        console.log('Fetch problem: ' + err.message);
//    });
//}
//gustas();






//var botonGusta = document.querySelector("#gusta-si-icono");

//function 
//amistad() {
//fetch('../../sql/red-social/Gusta.php', {
//    method: 'GET'
//}).then(function (response) {
//    if(response.ok) { return response.json(); } 
//    else { console.log("..........................................."); }
//}).then(function (json) {
//    console.log(json);
//     
//    jsonObject = json;
//    
//    console.log(jsonObject);
//    
////    let salida = "";
//
////    for (let i in jsonObject) {
////        console.log(jsonObject);
//
////        salida += `<i id="gusta-si-icono" class='fas fa-star'></i>`;
////
////        if (jsonObject[i].id == 'Conocido') {
////            salida += `<i style='color=green' id="gusta-si-icono" class='fas fa-star'></i>`;
////        } else if (json[0].amigos == 'Amigo') {
////            salida += `<i style='color=red' id="gusta-si-icono" class='fas fa-star'></i>`;
////        } else if (json[0].amigos == '') {
////            salida += `<i style='color=#1c1d22' id="gusta-si-icono" class='fas fa-star'></i>`;
////        }
////    }
//        
////    document.querySelector("#gusta-si-boton").innerHTML = salida;
//}).catch(function (err) {
//    console.log('Fetch problem: ' + err.message);
//});
////}
////amistad();