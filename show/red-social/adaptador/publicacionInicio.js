var jsonObject;

fetch('../../sql/red-social/PublicacionInicio.php').then(function (response) {
    return response.json();
}).then(function (json) {
    jsonObject = json;

    Obtener.publicacion();
}).catch(function (err) {
    console.log('Fetch problem: ' + err.message);
});

class Obtener {
    static
    publicacion() {
        let salida = "";

        for (let i in jsonObject) {
//            console.log(jsonObject);
//            console.log("id-" + jsonObject[i].id + "idU-" + jsonObject[i].idUsuario);
            salida += `
            <article>
                <section class="articulo-head">
                    <section>
                        <img src="../../front-multimedia/red-social/imagen/${jsonObject[i].foto}" class="foto" alt="alt"/>
                        <span class="">${jsonObject[i].fecha}, Por</span>
                        <h2>${jsonObject[i].nombre}</h2>
                    </section>  
                    <section>
                        <button><i class='fas fa-ellipsis-v'></i></button>
                    </section>
                </section>
                <hr>
                <section class="articulo-body">
                    <p>${jsonObject[i].publicacion}</p>
                    <img src="../../front-multimedia/red-social/imagen/${jsonObject[i].imagen}" alt="" style="width: 100%;"/>
                </section>
                <hr>
                <section class="articulo-footer">
<section>
    <form action="" method="POST" name="gusta-si${jsonObject[i].id}" id="gusta-si${jsonObject[i].id}">
        <input type="text" value="${jsonObject[i].id}" hidden="" name="publicacion-si">
        <!--input type="text" value="${jsonObject[i].gustaSi}" hidden="" name="gusta-si-total"-->
        <button type="submit" name="gusta-si-boton" value="Si" onclick="gustaSI(${jsonObject[i].id})">
            <i id="gusta-si-icono" class='fas fa-star'></i>
        </button>
    </form>
</section>
<section>
    <span>${jsonObject[i].gustaSi}</span>
</section>
<section>
    <form action="" method="POST" name="gusta-no${jsonObject[i].id}" id="gusta-no${jsonObject[i].id}">
        <input type="text" value="${jsonObject[i].id}" hidden="" name="publicacion-no">
        <button type="submit" name="gusta-no-boton" value="No" onclick="gustaNo(${jsonObject[i].id})">
            <i id="gusta-no-icono" class='fas fa-frog'></i>
        </button>
    </form>
</section>
<section>
    <span>${jsonObject[i].gustaNo}</span>
</section>
                    <!--section><button><i class='fas fa-comments'></i></button></section><section><span class="">100</span></section-->
<section>
    <form action="" method="POST" name="compartir${jsonObject[i].id}" id="compartir${jsonObject[i].id}">
        <input type="text" hidden="" name="compartido" value="${jsonObject[i].id}">
        <input type="text" hidden="" name="usuario" value="${jsonObject[i].idUsuario}">
        <button type="submit" name="compartir-boton" value="No" onclick="compartir(${jsonObject[i].id})">
            <i id="compartir-icono" class='fas fa-share'></i>
        </button>
    </form>
</section>
<section>
    <span>${jsonObject[i].compartida}</span>
</section>
                </section>
            </article>
            `;
        }
        document.querySelector(".n-grid > .area-2 > article > section.publicacion").innerHTML = salida;
    }
}