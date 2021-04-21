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
            salida += "<a href='javascript:void(0)' class='w3-bar-item w3-button w3-border-bottom test w3-hover-light-grey'"; 
            salida += "onclick='openMail('Borge');w3_close();' id='firstTab'>";
                salida += "<div class='w3-container'>";
                    salida += "<img class='w3-round w3-margin-right' style='width:15%;'"; 
                        salida += "src='../../../front-multimedia/red-social/imagen/" + jsonContactados[i].foto + "'>";
                    salida += "<span class='w3-opacity w3-large'>Borge Refsnes</span>";
                    salida += "<h6>Subject: " + jsonContactados[i].nombre + "</h6>";
                    salida += "<p>De: " + jsonContactados[i].de + ", Para: " + jsonContactados[i].para + "</p>";
                salida += "</div>";
            salida += "</a>";
        }
        document.querySelector("#contactados").innerHTML = salida;
    }
}

