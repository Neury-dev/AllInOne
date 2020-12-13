function
eliminar(idUnico) {
    const escogerForm = document.querySelector("#devolver" + idUnico);

    escogerForm.addEventListener('submit', function (e) {
        e.preventDefault();

        let id = document.forms["devolver" + idUnico]["id"].value;
        let escogerArticulo = document.forms["devolver" + idUnico]["crear-envio"].value;

        datos = new FormData(escogerForm);

        datos.append('id', id);
        datos.append('crear-envio', escogerArticulo);

        fetch('', {
            method: 'POST',
            body: datos
        }).then(function (response) {
            if (response.ok) {
                return response.text();
            } else {
                throw "Error en la llamada";
            }
        }).then(function (texto) {
            console.log(texto);
//            alertaGeneral.innerHTML = "Acaba de devolver uno escogido.";
//            alertaGeneral.className = "n-mostrar";
//
//            setTimeout(function () {
//                alertaGeneral.className = alertaGeneral.className.replace("n-mostrar", "");
//            }, 4000);
//            setTimeout(function () {
//                location.reload();
//            }, 4100);
        }).catch(function (error) {
            console.log(error);
        });
    });
}