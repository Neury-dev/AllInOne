var jsonObject, de;
/*
    * Chat 
 */
//fetch('../../../sql/red-social/Chats.php', {
//    method: 'GET'
//}).then(function (response) {
//    return response.json();
//}).then(function (json) {console.log(json);
//    jsonObject = json;
//
//    Conseguir.chat();
//}).catch(function (err) {
//    console.log('Ha ocurrido un error: ' + err.message);
//});
//class Chat {
//    static
//      reChatateado() {
//        fetch('../../../sql/red-social/Chats.php', {
//            method: 'GET'
//        }).then(function (response) {
//            return response.json();
//        }).then(function (json) {
//            console.log(json);
//            jsonObject = json;
//
//            Conseguir.chat();
//        }).catch(function (err) {
//            console.log('Ha ocurrido un error: ' + err.message);
//        });
//    }
//}
/*
    * john Doe 
 */
fetch('../../../sql/red-social/Sesion.php', {
    method: 'GET'
}).then(function (response) {
    if(response.ok) { return response.json(); } 
    else { console.log("..........................................."); }
}).then(function (json) {
    de = json[0].id;
}).catch(function (err) {
    console.log('Fetch problem: ' + err.message);
});
class Conseguir {
    static
    chat() {
        let salida = "";

        for (let i in jsonObject) {
            if (jsonObject[i].de === de) {
                salida += "<div class='container darker'>";
                    salida += "<img src='../../../front-multimedia/red-social/imagen/" + jsonObject[i].foto + "' alt='Avatar' class='right' style='width:100%;'>";
                    salida += "<p>" + jsonObject[i].mensaje + "</p>";
                    salida += "<span class='time-left'>" + jsonObject[i].fecha + "</span>";
                salida += "</div>";
            } else {
                salida += "<div class='container'>";
                    salida += "<img src='../../../front-multimedia/red-social/imagen/" + jsonObject[i].foto + "' alt='Avatar' style='width:100%;'>";
                    salida += "<p>" + jsonObject[i].mensaje + "</p>";
                    salida += "<span class='time-right'>" + jsonObject[i].fecha + "</span>";
                salida += "</div>";
            } 
        }
        document.querySelector(".chat").innerHTML = salida;
    }
}
class Chats {
    static
    mensajes(id) {
        const contactado = document.querySelector("#contactado-" + id);

        contactado.addEventListener('submit', function (e) {
            e.preventDefault();

            let chat = document.forms["contactado-" + id]["chat-contactado"].value;

            let datos = new FormData(contactado);

            datos.append('chat-contactado', chat);

            fetch('../../../sql/red-social/Chats.php', {
                method: 'POST',
                body: datos
            }).then(function (response) {
                if (response.ok) {
                    return response.json();
                } else {
                    throw "Error en la llamada";
                }
            }).then(function (json) {console.log("Chats.mensajes > " + json);
//                ChatContactado.contactado();
                    jsonObject = json;

        //    setTimeout(function(){
                    Conseguir.chat();
        //    }, 1000);
                document.querySelector("input#chat-con").value = id;
            }).catch(function (error) {
                console.log(error);
            });
        });
    }
}
/*
    * Chat con 
 */
class ChatCon {
    static
    reMensaje() {
        const chatPara = document.querySelector("#chat-para");

        chatPara.addEventListener('submit', function (e) {
            e.preventDefault();

            let chatCon     = document.forms["chat-para"]["chat-con"].value;
            let reMensaje   = document.forms["chat-para"]["re-mensaje"].value;

            let datos = new FormData(chatPara);
            
            datos.append('chat-con', chatCon);
            datos.append('re-mensaje', reMensaje);

            fetch('../../../sql/red-social/ChatCon.php', {
                method: 'POST',
                body: datos
            }).then(function (response) {
                if (response.ok) {
                    return response.text();
                } else {
                    throw "Error en la llamada";
                }
            }).then(function (texto) { console.log("con > " + chatCon + " Mas: " + texto);
                chatPara.reset();
//                Chat.reChatateado();
                
//                Conseguir.chat();
                
                setTimeout(function () {
                    Chats.mensajes(chatCon);
                }, 1000);
                setTimeout(function () {
                    document.querySelector("input#chat-con").value = chatCon;
                }, 2000);
            }).catch(function (error) {
                console.log(error);
            });
        });
    }
}