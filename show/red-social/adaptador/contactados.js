var jsonContactados;

fetch('../../../sql/red-social/Contactados.php').then(function (response) {
    return response.json();
}).then(function (json) {
    console.log(json);
    jsonContactados = json;
//    setTimeout(function(){
        GetContactados.publicar();
//    }, 1000);
}).catch(function (err) {
    console.log('Ha ocurrido un error: ' + err.message);
});

class GetContactados {
    static
    publicar() {
        let salida = "";

        for (let i in jsonContactados) {
            salida += "<div class='w3-bar-item w3-button w3-border-bottom test w3-hover-light-grey'>";
                salida += "<div class='w3-container'>";
                    salida += "<img class='w3-round w3-margin-right' style='width:15%;'"; 
                        salida += "src='../../../front-multimedia/red-social/imagen/" + jsonContactados[i].foto + "'>";
                    salida += "<form action='' method='POST' name='contactado-"+jsonContactados[i].ok+"' id='contactado-"+jsonContactados[i].ok+"'>";
                        salida += "<input type='hidden' id='chat-contactado' name='chat-contactado' value='" + jsonContactados[i].ok + "'>";
                        salida += "<button type='submit' onclick='Chats.mensajes("+jsonContactados[i].ok+")'>"+jsonContactados[i].nombre+"</button>";
                    salida += "</form>";
                    salida += "<h6>Subject: " + jsonContactados[i].nombre + "</h6>";
                    salida += "<p>Chat con: " + jsonContactados[i].ok + "</p>";
                salida += "</div>";
            salida += "</div>";
        }
        document.querySelector("#contactados").innerHTML = salida;
    }
}

