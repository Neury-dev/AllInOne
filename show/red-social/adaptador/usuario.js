var jsonObject;

fetch('../../../sql/red-social/Usuario.php', {
    method: 'GET'
}).then(function (response) {
    if(response.ok) { return response.json(); } 
    else { console.log("..........................................."); }
}).then(function (json) {
    jsonObject = json;

    Obtener.usuario();
}).catch(function (err) {
    console.log('Fetch problem: ' + err.message);
});

class Obtener {
    static
    usuario() {
        let salida = "";

        for (let i in jsonObject) {
            salida += `
            <main>
                <img src="../../../front-multimedia/red-social/imagen/app.jpg" class="portada" alt="alt"/>
                <section class="contenedor">
                    <img src="../../../front-multimedia/red-social/imagen/${jsonObject[i].foto}" class="foto" alt=""/>
                    <section class="perfil-nav">
                        <button><i class='fas fa-user-friends'></i></button>
                        <button><i class='fas fa-comments'></i></button>
                    </section>
                </section>
            </main>
            `;
        }
        document.querySelector(".n-grid > .area-1").innerHTML = salida;
    }
}