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
            
//            console.log("id-" + jsonObject[i].id + "idU-" + jsonObject[i].idUsuario);
            salida += "<article>";
            salida += "<section class='articulo-head'>";
                salida += "<section>";
                    salida += "<img src='../../front-multimedia/red-social/imagen/"+jsonObject[i].foto + "'class='foto' alt='alt'/>";
                    salida += "<span>" + jsonObject[i].fecha + "De </span>";
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
//                salida += "<form action='' method='POST' name='comentados" + jsonObject[i].id + "' id='comentados" + jsonObject[i].id + "'>";
//                salida += "<input type='text' value='" + jsonObject[i].id + "' hidden='' name='publicacion'>";
                    salida += "<button type='submit' name='' value='' onclick='comentar(" + jsonObject[i].id + ")'>";
                        salida += "<i id='gusta-no-icono' class='fas fa-comments'></i>";
                    salida += "</button>";
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
        salida += "<div class='w3-card w3-round'>";
            salida += "<div class='w3-white'>";
            

/*
    * style='display: block' o class='w3-hide'
*/
            
            
                salida += "<div id='comentario-" + jsonObject[i].id + "' class='w3-container'>";
                    salida += "<section id='comentado-" + jsonObject[i].id + "' class='comentado-" + jsonObject[i].id + "'>";
for (let ii in jsonObject[i].comentario) {
console.log("Dentro: " + jsonObject[i].comentario[ii]);
    for (let iii in jsonObject[i].comentario[ii]) {
    console.log("Dentro: " + jsonObject[i].comentario[ii][iii].comentario);
        
        if(jsonObject[i].id == jsonObject[i].comentario[ii][iii].publicacion) {
                        salida += "<div class='comentario'>";
                            salida += "<img src='../../front-multimedia/red-social/imagen/avatar3.png' alt='Avatar' style='width:100%;'>";
                            salida += "<p>" + jsonObject[i].comentario[ii][iii].comentario+ "</p>";
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
                        salida += "<button type='submit' name='comentar' id='comentar' value='Comentar' onclick='comentado("+jsonObject[i].id+")'>";
                            salida += "<i id='comentar-icono' class='fa fa-comment'></i>";
                        salida += "</button>";
                    salida += "</form>";
                salida += "</div>";
            salida += "</div>";      
        salida += "</div>";
        salida += "<br>";
//            salida += `
//            <article>
//                <section class="articulo-head">
//                    <section>
//                        <img src="../../front-multimedia/red-social/imagen/${jsonObject[i].foto}" class="foto" alt="alt"/>
//                        <span class="">${jsonObject[i].fecha}, De</span>
//                        <h2>${jsonObject[i].nombre} <span>${jsonObject[i].por}</span> ${jsonObject[i].autor}</h2>
//                    </section>  
//                    <section>
//                        <button><i class='fas fa-ellipsis-v'></i></button>
//                    </section>
//                </section>
//                <hr>
//                <section class="articulo-body">
//                    <p>${jsonObject[i].publicacion}</p>
//                    <img src="../../front-multimedia/red-social/imagen/${jsonObject[i].imagen}" alt="" style="width: 100%;"/>
//                </section>
//                <hr>
//                <section class="articulo-footer">
//<section>
//    <form action="" method="POST" name="gusta-si${jsonObject[i].id}" id="gusta-si${jsonObject[i].id}">
//        <input type="text" value="${jsonObject[i].id}" hidden="" name="publicacion-si">
//        <!--input type="text" value="${jsonObject[i].gustaSi}" hidden="" name="gusta-si-total"-->
//        <button type="submit" name="gusta-si-boton" value="Si" onclick="gustaSI(${jsonObject[i].id})">
//            <i id="gusta-si-icono" class='fas fa-star'></i>
//        </button>
//    </form>
//</section>
//<section>
//    <span>${jsonObject[i].gustaSi}</span>
//</section>
//<section>
//    <form action="" method="POST" name="gusta-no${jsonObject[i].id}" id="gusta-no${jsonObject[i].id}">
//        <input type="text" value="${jsonObject[i].id}" hidden="" name="publicacion-no">
//        <button type="submit" name="gusta-no-boton" value="No" onclick="gustaNo(${jsonObject[i].id})">
//            <i id="gusta-no-icono" class='fas fa-frog'></i>
//        </button>
//    </form>
//</section>
//<section>
//    <span>${jsonObject[i].gustaNo}</span>
//</section>
//<section>
//    <form action="" method="POST" name="comentados${jsonObject[i].id}" id="comentados${jsonObject[i].id}">
//    <input type="text" value="${jsonObject[i].id}" hidden="" name="publicacion">
//        <button type="submit" name="" value=""
//            onclick="comentar(${jsonObject[i].id})">
//            <i id="gusta-no-icono" class='fas fa-comments'></i>
//        </button>
//    </form>
//</section>
//<section>
//    <span>100</span>
//</section>
//<section>
//    <form action="" method="POST" name="compartir${jsonObject[i].id}" id="compartir${jsonObject[i].id}">
//        <input type="text" hidden="" name="compartido" value="${jsonObject[i].id}">
//        <input type="text" hidden="" name="nombre" value="${jsonObject[i].nombre}">
//        <input type="text" hidden="" name="usuario" value="${jsonObject[i].idUsuario}">
//        <input type="text" hidden="" name="articulo" value="${jsonObject[i].publicacion}">
//        <input type="text" hidden="" name="imagen" value="${jsonObject[i].imagen}">
//        <button type="submit" name="compartir-boton" value="No" onclick="compartir(${jsonObject[i].id})">
//            <i id="compartir-icono" class='fas fa-share'></i>
//        </button>
//    </form>
//</section>
//<section>
//    <span>${jsonObject[i].compartida}</span>
//</section>
//                </section>
//            </article>
//<!-- 
//    Comentarios 
//-->
//<div class="w3-card w3-round">
//    <div class="w3-white">
//        <div id="comentario-${jsonObject[i].id}" class="w3-hide w3-container">
//<section id="comentado-${jsonObject[i].id}" class="comentado-${jsonObject[i].id}">
//    <div class="comentario">
//        <img src="../../front-multimedia/red-social/imagen/avatar3.png" alt="Avatar" style="width:100%;">
//        <p>${jsonObject[i].comentario[i][ii].comentario}</p>
//        <span class="time-right">${jsonObject[i].comentario[i][ii].fecha}</span>
//    </div>
//</section>
//            
//            <form action="" method="POST" 
//            name="comentario${jsonObject[i].id}" id="comentario${jsonObject[i].id}">
//                <input type="text" hidden="" name="usuario" value="${jsonObject[i].idUsuario}">
//                <input type="text" hidden="" name="publicacion" value="${jsonObject[i].id}">
//                <textarea name="comentario" placeholder="Comentar..."
//                    rows="2" maxlength="140"
//                ></textarea>
//                <button type="submit" name="comentar" id="comentar" value="Comentar" 
//                onclick="comentado(${jsonObject[i].id})">
//                    <i id="comentar-icono" class='fa fa-comment'></i>
//                </button>
//            </form>
//        </div>
//            
//    </div>      
//</div>
//      <br>
//            `;
           
        }
        document.querySelector(".n-grid > .area-2 > article > section.publicacion").innerHTML = salida;
    }
}
function 
comentar(id) {
    var x = document.getElementById("comentario-"+id);
    
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
//        x.previousElementSibling.className += " w3-theme-d1";
    } else {
        x.className = x.className.replace("w3-show", "");
//        x.previousElementSibling.className = 
//        x.previousElementSibling.className.replace(" w3-theme-d1", "");
    }
    
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
//    });
}
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

