/*
    * ............................
 */
function 
menu(evt, tipo) {
    var i, contenido, enlace;
    
    contenido = document.getElementsByClassName("contenido");
    
    var c = contenido.length;
    for (i = 0; i < c; i++) {
        contenido[i].style.display = "none";
    }
    
    enlace = document.getElementsByClassName("enlace");
    
    var e = enlace.length;
    for (i = 0; i < e; i++) {
        enlace[i].className = enlace[i].className.replace(" activo", "");
    }
    

    document.getElementById(tipo).style.display = "block";
    evt.currentTarget.className += " activo";
    
    if(evt.currentTarget.className) {
        evtelement.classList.toggle("activo");
    } else {
        evt.currentTarget.className.replace(" activo", "");
    }
}


//e = document.querySelector(".enlace");
//
//e.onclick = function () {
//    var element = document.querySelector(".enlace");
//
//    if (element.classList) {
//        element.classList.toggle("activo");
//    } else {
//        var classes = element.className.split(" ");
//        var i = classes.indexOf("activo");
//
//        if (i >= 0)
//            classes.splice(i, 1);
//        else
//            classes.push("activo");
//            element.className = classes.join(" ");
//    }
//}
//var enlac = document.querySelector(".enlace");
//
//class Menu {
//    static
//    enlace () {
//        enlac.classList.remove("activo");
//    }
//}
//
//enlac.addEventListener("click", Menu.enlace());
