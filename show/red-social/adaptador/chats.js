var jsonObject;

fetch('../../../sql/red-social/Chats.php').then(function (response) {
    return response.json();
}).then(function (json) {
    console.log(json);
//    console.log("Cero: " + json[0].comentario[0][0].comentario);
    jsonObject = json;
    
//    setTimeout(function(){
        Obtener.publicacion();
//    }, 1000);
    
}).catch(function (err) {
    console.log('Ha ocurrido un error: ' + err.message);
});

class Obtener {
    static
    publicacion() {
        let salida = "";

        for (let i in jsonObject) {
            if (jsonObject[i].de === '5') {
                salida += "<div class='container'>";
                    salida += "<img src='../../../front-multimedia/red-social/imagen/" + jsonObject[i].foto + "' alt='Avatar' style='width:100%;'>";
                    salida += "<p>" + jsonObject[i].mensaje + "</p>";
                    salida += "<span class='time-right'>" + jsonObject[i].fecha + "</span>";
                salida += "</div>";
            } else if (jsonObject[i].de === '1') {
                salida += "<div class='container darker'>";
                    salida += "<img src='../../../front-multimedia/red-social/imagen/" + jsonObject[i].foto + "' alt='Avatar' class='right' style='width:100%;'>";
                    salida += "<p>" + jsonObject[i].mensaje + "</p>";
                    salida += "<span class='time-left'>" + jsonObject[i].fecha + "</span>";
                salida += "</div>";
            }
        }
        document.querySelector(".chat").innerHTML = salida;
    }
}
////class Chats {
//    static
//    mensajes() {
//        const chat = document.querySelector("#chat");
//
//        chat.addEventListener('submit', function (e) {
//            e.preventDefault();
//    //        let usuario = document.forms["chat"]["usuario"].value;
//            let mensaje = document.forms["chat"]["mensaje"].value;
//
//            let datos = new FormData(chat);
//    //        datos.append('usuario', usuario);
//            datos.append('mensaje', mensaje);
//
//            fetch('../../../sql/red-social/Chat.php', {
//                method: 'POST',
//                body: datos
//            }).then(function (response) {
//                if (response.ok) {
//                    return response.text();
//                } else {
//                    throw "Error en la llamada";
//                }
//            }).then(function (texto) {
//                chat.reset();
//                
//                setTimeout(function(){
//                    document.querySelector("#chat-responde").innerHTML = texto;
////                    document.forms["chat"]["mensaje"].value = texto;
//                }, 100);
//            }).catch(function (error) {
//                console.log(error);
//            });
//        });
//    }
//}