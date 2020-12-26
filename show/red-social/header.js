//var cerrarHeader = document.querySelector("#n-icono-mediano");
class Header {
    constructor() {
 
    }
    mediano() {
        var mediano = document.querySelector("#n-header-mediano");

        if (mediano.style.display === "none") { mediano.style.display = "block"; }
        else { mediano.style.display = "none"; }
    }
}
let ejecutarHeader = new Header();
//ejecutarHeader.mediano();


//function 
//header() {
//    var x = document.querySelector("#n-header");
//    x.classList.toggle("responsive");
//}
//
//Ocultar la cabecera y el menu de headeregación
//
var prevScrollpos = window.pageYOffset;

window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;

    if (prevScrollpos > currentScrollPos) {
        document.querySelector("#n-header").style.top = "0em";
//        document.querySelector("#n-header").style.top = "0%";
//        document.querySelector("#n-header-span").style.top = "5%";
//        document.querySelector("#n-icono-mediano").style.top = "5%";
        document.querySelector("#n-header-mediano").style.top = "3em";
//        document.querySelector("#n-header-minimo").style.top = "10%";
    } else {
        document.querySelector("#n-header").style.top = "-3em";
//        document.querySelector("#n-header").style.top = "-10%";
//        document.querySelector("#n-header-span").style.top = "-10%";
//        document.querySelector("#n-icono-mediano").style.top = "-10%";
        document.querySelector("#n-header-mediano").style.top = "-3em";
//        document.querySelector("#n-header-minimo").style.top = "-12%";
    }

    prevScrollpos = currentScrollPos;
};