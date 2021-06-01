const formTodo = document.querySelector('#todo');
var cabecera = new Headers();

cabecera.append('Content-Type', 'image/jpeg');

class Publicar {
    static
    todo() {
        let publicacion     = document.forms["todo"]["publicacion"].value;
        let imagen          = document.forms["todo"]["imagen"].files[0];
        let publicarTodo    = document.forms["todo"]["publicar-todo"].value;

        let datos           = new FormData(formTodo);

        datos.append('publicacion', publicacion);
        datos.append('imagen', imagen);
        datos.append('publicar-todo', publicarTodo);

        fetch('../../../s/red_social/l/PublicarTodo.php', {
            method: 'POST', // *GET, POST, PUT, DELETE, etc.
//            mode: 'cors', // no-cors, *cors, same-origin
//            cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
//            credentials: 'same-origin', // include, *same-origin, omit
//            headers: {
////                'Content-Type': 'application/json',
//                'Content-Type': 'application/x-www-form-urlencoded'
//            },
//            redirect: 'follow', // manual, *follow, error
//            referrerPolicy: 'no-referrer', // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
            body: new FormData(formTodo)
        }).then(function(response) {
            if(response.ok) { 
                return response.text(); 
            } else { 
                throw "Error con la respuesta."; 
            }
        }).then(function(texto) {
            formTodo.reset();
//            resEliminar.innerHTML = texto;
            console.log(texto);
        }).catch(function(error) {
            console.log(error);
        });
    }
}
formTodo.addEventListener('submit', function(e) {
    e.preventDefault();
    Publicar.todo(); 
});