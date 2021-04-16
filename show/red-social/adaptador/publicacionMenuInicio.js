var jsonObject;
/*
    * GustaSi 
 */
class RePublicar {
    static
    datos() {
        fetch('../../sql/red-social/PublicacionInicio.php').then(function (response) {
            return response.json();
        }).then(function (json) {
            jsonObject = json;

            Obtener.publicacion();
        }).catch(function (err) {
            console.log('Fetch problem: ' + err.message);
        });
    }
}
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
        }).then(function (response) {
            if (response.ok) {
                return response.text();
            } else {
                throw "Error en la llamada";
            }
        }).then(function (texto) {
            Obtener.publicacion();
            RePublicar.datos();
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
        }).then(function (response) {
            if (response.ok) {
                return response.text();
            } else {
                throw "Error en la llamada";
            }
        }).then(function (texto) {
            Obtener.publicacion();
            RePublicar.datos();
            console.log(publicacionNo + "" + texto);
        }).catch(function (error) {
            console.log(error);
        });
    });
}
/*
    * Compartir
 */
function 
compartir(id) {
    const compartir = document.querySelector("#compartir"+id);
    
    compartir.addEventListener('submit', function (e) {
        e.preventDefault();

        let compartido      = document.forms["compartir"+id]["compartido"].value;
        let usuario         = document.forms["compartir"+id]["usuario"].value;
        let articulo        = document.forms["compartir"+id]["articulo"].value;
        let imagen          = document.forms["compartir"+id]["imagen"].value;
        let compartirBoton  = document.forms["compartir"+id]["compartir-boton"].value;
        
        let datos = new FormData(compartir);

        datos.append('compartido', compartido);
        datos.append('usuario', usuario);
        datos.append('articulo', articulo);
        datos.append('imagen', imagen);
        datos.append('compartir-boton', compartirBoton);
        
        fetch('../../sql/red-social/Compartir.php', {
            method: 'POST',
            body: datos
        }).then(function (response) {
            if (response.ok) {
                return response.text();
            } else {
                throw "Error en la llamada";
            }
        }).then(function (texto) {
            Obtener.publicacion();
            RePublicar.datos();
            console.log(compartido + " " + usuario + " " + texto);
        }).catch(function (error) {
            console.log(error);
        });
    });
}