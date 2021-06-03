const formTodo  = document.querySelector('#todo');
const res       = document.querySelector('#res');

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

        fetch('../../s/red_social/l/PublicarTodo.php', {
            method: 'POST',
            headers: {
                'Content-Disposition' : 'form-data'
            },
            body: datos
        }).then(function(response) {
            if(response.ok) { 
                return response.text(); 
            } else { 
                throw "Error de URL."; 
            }
        }).then(function(texto) {
            formTodo.reset();
            Publicacion.yo();
            res.innerHTML = texto;
        }).catch(function(error) {
            console.log(error);
        });
    }
}
formTodo.addEventListener('submit', function(e) {
    e.preventDefault();
    Publicar.todo(); 
});