var jsonObject, salida;

fetch('../../sql/red-social/Publicacion2.php').then(function (response) {
    return response.json();
//    return response.text();
}).then(function (json) {
    jsonObject = json;
//    console.log("O: " + jsonObject.publicacion.id);
//    document.querySelector(".n-grid > .area-3 > section.publicacion").innerHTML = json;
    Obtener.publicacion();
}).catch(function (err) {
    console.log('Fetch problem: ' + err.message);
});

class Obtener {
    static
    publicacion() {
        let salida = "";

        for (let i in jsonObject) {
            console.log("R: " + jsonObject[i][i].fecha);
//            console.log("L: " + jsonObject[i].length);
            salida += `
            <article>
                <section class="articulo-head">
                    <section>
                        <img src="../../front-multimedia/red-social/imagen/avatar3.png" class="foto" alt="alt"/>
                        <h2></h2>
                    </section>  
                    <section>
                        <span class="">${jsonObject[i].fecha}</span> <button><i class='fas fa-ellipsis-v'></i></button>
                    </section>
                </section>
                <hr>
                <section class="articulo-body">
                    <p>${jsonObject[i].publicacion}</p>
                    <img src="../../front-multimedia/red-social/imagen/app.jpg" alt="" style="width: 100%;"/>
                </section>
                <hr>
                <section class="articulo-footer">
                    <section><button><i class='fas fa-star'></i></button></section><section><span class="">100</span></section>
                            <section><button><i class='fas fa-frog'></i></button></section><section><span class="">100</span></section>
                    <section><button><i class='fas fa-comments'></i></button></section><section><span class="">100</span></section>
                    <section><button><i class='fas fa-share'></i></button></section><section><span class="">100</span></section>
                </section>
            </article>
            `;
        }
        document.querySelector(".n-grid > .area-3 > section.publicacion").innerHTML = salida;
    }
}