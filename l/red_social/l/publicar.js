const formTodo = document.querySelector('#todo');

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
            method: 'POST', // *GET, POST, PUT, DELETE, etc.
            headers: {
                'Content-Disposition' : 'form-data'
            },
            body: datos
        }).then(function(response) {
            if(response.ok) { 
                return response.text(); 
            } else { 
                throw "Error con la respuesta."; 
            }
        }).then(function(texto) {
            formTodo.reset();
            Publicacion.yo();
        }).catch(function(error) {
            console.log(error);
        });
    }
}
formTodo.addEventListener('submit', function(e) {
    e.preventDefault();
    Publicar.todo(); 
});