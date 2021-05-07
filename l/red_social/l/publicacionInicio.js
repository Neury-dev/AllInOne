var jsonObject;
var jsonComentado;

fetch('../../sql/red-social/PublicacionInicio_1.php').then(function (response) {
    return response.json();
}).then(function (json) {
    console.log(json);
//    console.log("Cero: " + json[0].comentario[0][0].comentario);
    jsonObject = json;

    Obtener.publicacion();
}).catch(function (err) {
    console.log('Fetch problem: ' + err.message);
});
//fetch('../../sql/red-social/Comentarios.php').then(function (response) {
//    return response.text();
//}).then(function (texto) {
//    console.log(texto);
//    
//    document.querySelector("#"+texto).style.display = 'block!important';
//}).catch(function (err) {
//    console.log('Fetch problem: ' + err.message);
//});
//function 
//comentar(id) {
//    var x = document.getElementById(id);
//    
//    if (x.className.indexOf("w3-show") == -1) {
//        x.className += " w3-show";
//        x.previousElementSibling.className += " w3-theme-d1";
//    } else {
//        x.className = x.className.replace("w3-show", "");
//        x.previousElementSibling.className = x.previousElementSibling.className.replace(" w3-theme-d1", "");
//    }
//}

class Obtener {
    static
    publicacion() {
        let salida = "";

        for (let i in jsonObject) {
            salida += "<article>";
            salida += "<section class='articulo-head'>";
                salida += "<section>";
                    salida += "<img src='../../front-multimedia/red-social/imagen/"+jsonObject[i].foto + "'class='foto' alt='alt'/>";
                    salida += "<span>" + jsonObject[i].fecha + ", De </span>";
                    salida += "<h2>" + jsonObject[i].nombre + "<span> " + jsonObject[i].por + " </span>" + jsonObject[i].autor + "</h2>";
                salida += "</section>";  
                salida += "<section>";
                    salida += "<button><i class='fas fa-ellipsis-v'></i></button>";
                salida += "</section>";
            salida += "</section>";
            salida += "<hr>";
            salida += "<section class='articulo-body'>";
                salida += "<p>" + jsonObject[i].publicacion + "</p>";
                salida += "<img src='../../front-multimedia/red-social/imagen/"+jsonObject[i].imagen + "'alt='' style='width: 100%;'/>";
            salida += "</section>";
            salida += "<hr>";
            salida += "<section class='articulo-footer'>";
            salida += "<section>";
                salida += "<form action='' method='POST' name='gusta-si"+jsonObject[i].id + "'id='gusta-si"+jsonObject[i].id + "'>";
                    salida += "<input type='text' value='" + jsonObject[i].id + "' hidden='' name='publicacion-si'>";
                    salida += "<button type='submit' name='gusta-si-boton' value='Si' onclick='gustaSI(" + jsonObject[i].id + ")'>";
                        salida += "<i id='gusta-si-icono' class='fas fa-star'></i>";
                    salida += "</button>";
                salida += "</form>";
            salida += "</section>";
            salida += "<section>";
                salida += "<span>" + jsonObject[i].gustaSi + "</span>";
            salida += "</section>";
            salida += "<section>";
                salida += "<form action='' method='POST' name='gusta-no" + jsonObject[i].id + "' id='gusta-no" + jsonObject[i].id + "'>";
                    salida += "<input type='text' value='" + jsonObject[i].id +"' hidden='' name='publicacion-no'>";
                    salida += "<button type='submit' name='gusta-no-boton' value='No' onclick='gustaNo(" + jsonObject[i].id + ")'>";
                        salida += "<i id='gusta-no-icono' class='fas fa-frog'></i>";
                    salida += "</button>";
                salida += "</form>";
            salida += "</section>";
            salida += "<section>";
                salida += "<span>" + jsonObject[i].gustaNo + "</span>"
            salida += "</section>";
            salida += "<section>";
//                salida += "<form>";
//                salida += "<form action='' method='POST' name='comentados" + jsonObject[i].id + "' id='comentados" + jsonObject[i].id + "'>";
//                salida += "<input type='text' value='comentarios-" + jsonObject[i].id + "' hidden='' name='comentarios' id='comentarios'>";
                    salida += "<button onclick='comentar(" + jsonObject[i].id + ")'>";
                        salida += "<i id='gusta-no-icono' class='fas fa-comments'></i>";
                    salida += "</button>";
//                salida += "</form>";
//                salida += "</form>";
            salida += "</section>";
            salida += "<section>";
                salida += "<span>" + jsonObject[i].comentarios + "</span>";
            salida += "</section>";
            salida += "<section>";
                salida += "<form action='' method='POST' name='compartir" + jsonObject[i].id + "' id='compartir" + jsonObject[i].id + "'>";
                    salida += "<input type='text' hidden='' name='compartido' value='" + jsonObject[i].id + "'>";
                    salida += "<input type='text' hidden='' name='nombre' value='" + jsonObject[i].nombre + "'>";
                    salida += "<input type='text' hidden='' name='usuario' value='" + jsonObject[i].idUsuario + "'>";
                    salida += "<input type='text' hidden='' name='articulo' value='" + jsonObject[i].publicacion + "'>"
                    salida += "<input type='text' hidden='' name='imagen' value='" + jsonObject[i].imagen + "'>";
                    salida += "<button type='submit' name='compartir-boton' value='No' onclick='compartir(" + jsonObject[i].id + ")'>";
                        salida += "<i id='compartir-icono' class='fas fa-share'></i>";
                    salida += "</button>";
                salida += "</form>";
            salida += "</section>";
            salida += "<section>";
                salida += "<span>" + jsonObject[i].compartida + "</span>";
            salida += "</section>";
            salida += "</section>";
            salida += "</article>";
salida += "<!-- Comentarios -->";
            salida += "<div id='comentarios-" + jsonObject[i].id + "' class='ocultar w3-container'>";
                salida += "<section id='comentado-" + jsonObject[i].id + "' class='comentado-" + jsonObject[i].id + "'>";
                    for (let ii in jsonObject[i].comentario) {

                        for (let iii in jsonObject[i].comentario[ii]) {

                            if(jsonObject[i].id == jsonObject[i].comentario[ii][iii].publicacion) {
                                salida += "<div class='comentario'>";
                                    salida += "<img src='../../front-multimedia/red-social/imagen/"+jsonObject[i].comentario[ii][iii].foto+"'";                                      salida += "alt='Avatar' style='width:100%;'>";
                                    salida += "<p>" + jsonObject[i].comentario[ii][iii].comentario + "</p>";
                                    salida += "<span class='time-right'>" + jsonObject[i].comentario[ii][iii].fecha + "</span>";
                                salida += "</div>";
                            }
                        }
                    }
                salida += "</section>";

                salida += "<form action='' method='POST' name='comentario" + jsonObject[i].id + "' id='comentario" + jsonObject[i].id + "'>";
                    salida += "<input type='text' hidden='' name='usuario' value='" + jsonObject[i].idUsuario + "'>";
                    salida += "<input type='text' hidden='' name='publicacion' value='" + jsonObject[i].id + "'>";
                    salida += "<textarea name='comentario' placeholder='Comentar...' rows='2' maxlength='140'></textarea>";
                    salida += "<button type='submit' name='comentar' id='comentar' value='Comentar'"; 
                        salida += "onclick='comentado(" + jsonObject[i].id + ")'>";
                        salida += "<i id='comentar-icono' class='fa fa-comment'></i>";
                    salida += "</button>";
                salida += "</form>";
            salida += "</div>";
            salida += "<br>";
        }
        document.querySelector(".n-grid > .area-2 > article > section.publicacion").innerHTML = salida;
    }
}
//function 
//comentar(id) {
//    var x = document.getElementById("comentarios-"+id);
//    
//    if (x.className.indexOf("w3-show") == -1) {
//        x.className += " w3-show";
////        x.previousElementSibling.className += " w3-theme-d1";
//    } else {
//        x.className = x.className.replace("w3-show", "");
////        x.previousElementSibling.className = 
////        x.previousElementSibling.className.replace(" w3-theme-d1", "");
//    }
    
//    const comentados = document.querySelector("#comentados" + id);
//  
//    comentados.addEventListener('submit', function (e) {
//        e.preventDefault();
//        
//        let publicacion = document.forms["comentados" + id]["publicacion"].value;
////        let comentar = document.forms["comentados" + id]["comentar"].value;
//    
//        let datos = new FormData(comentados);
//    
//        datos.append('publicacion', publicacion);
//        datos.append('comentar', comentar);
//    
//        fetch('../../sql/red-social/ComentariosInicio.php', {
//            method: 'POST',
//            body: datos
//        }).then(function (response) {
//            if (response.ok) {
//                return response.json();
//            } else {
//                throw "Error en la llamada";
//            }
//        }).then(function (json) {
////            Obtener.publicacion();
////            RePublicar.datos();
//            jsonComentado = json;
//            Comentarios.comentados(id);
//        }).catch(function (error) {
//            console.log(error);
//        });
////    });
//}
//class Comentarios {
//    static
//    comentados(id) {
//        let salida = "";
//        
//        for (let i in jsonComentado) {
//            console.log(jsonComentado);
////            console.log("id-" + jsonObject[i].id + "idU-" + jsonObject[i].idUsuario);
//salida += `
//            <!-- 
//                Comentarios 
//            -->
//
//            <div class="comentario">
//                <img src="../../front-multimedia/red-social/imagen/avatar3.png" alt="Avatar" style="width:100%;">
//                <p>${jsonComentado[i].comentario}</p>
//                <span class="time-right">${jsonComentado[i].fecha}</span>
//            </div>
//                        `;
//        }
//        document.querySelector(".comentado-"+id).innerHTML = salida;
//    }
//}

