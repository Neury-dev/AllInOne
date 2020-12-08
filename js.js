//Obtiene la url
document.getElementById("demo").innerHTML = "La URL completa de la pagina:<br>" + window.location.href;

window.onload = function() {
    if(window.location.href === "http://localhost/AllInOne/front/tienda/interior.php") {
        console.log('Si funciona');
    } else {
        console.log('No funciona');
    }
};

var cadena = "Cadena mas chain";
var numero = 100;

