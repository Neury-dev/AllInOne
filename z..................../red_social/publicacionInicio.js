var jsonObject;
var jsonComentado;

fetch('../../s/red_social/l/PublicacionInicio_1.php').then(function (response) {
    return response.json();
}).then(function (json) {// console.log("Cero: " + json[0].comentario[0][0].comentario);
    jsonObject = json;

    Obtener.publicacion();
}).catch(function (err) {
    console.log('Fetch problem: ' + err.message);
});

function 
comentar(id) {
    var x = document.getElementById("comentarios-"+id);
    
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
//        x.previousElementSibling.className += " w3-theme-d1";
    } else {
        x.className = x.className.replace("w3-show", "");
//        x.previousElementSibling.className = 
//        x.previousElementSibling.className.replace(" w3-theme-d1", "");
    }
    
    const comentados = document.querySelector("#comentados" + id);
  
    comentados.addEventListener('submit', function (e) {
        e.preventDefault();
        
        let publicacion = document.forms["comentados" + id]["publicacion"].value;
//        let comentar = document.forms["comentados" + id]["comentar"].value;
    
        let datos = new FormData(comentados);
    
        datos.append('publicacion', publicacion);
        datos.append('comentar', comentar);
    
        fetch('../../sql/red-social/ComentariosInicio.php', {
            method: 'POST',
            body: datos
        }).then(function (response) {
            if (response.ok) {
                return response.json();
            } else {
                throw "Error en la llamada";
            }
        }).then(function (json) {
//            Obtener.publicacion();
//            RePublicar.datos();
            jsonComentado = json;
            Comentarios.comentados(id);
        }).catch(function (error) {
            console.log(error);
        });
    });
}
class Comentarios {
    static
    comentados(id) {
        let salida = "";
        
        for (let i in jsonComentado) {
            console.log(jsonComentado);
//            console.log("id-" + jsonObject[i].id + "idU-" + jsonObject[i].idUsuario);
salida += `
            <!-- 
                Comentarios 
            -->

            <div class="comentario">
                <img src="../../front-multimedia/red-social/imagen/avatar3.png" alt="Avatar" style="width:100%;">
                <p>${jsonComentado[i].comentario}</p>
                <span class="time-right">${jsonComentado[i].fecha}</span>
            </div>
                        `;
        }
        document.querySelector(".comentado-"+id).innerHTML = salida;
    }
}

